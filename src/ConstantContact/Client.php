<?php

namespace PHPFUI\ConstantContact;

/**
 * The Client class needs to store authentication information between PHP sessions in order to function correctly.  The class defaults to normal PHP $_SESSION handling,
 * but you can specify a callback via **setSessionCallback** to provide a different persistence model. The callback function signature is:
 *
 * @param string $key used to store or retrieve $value
 * @param ?string $value if null, value should be returned and key deleted, if not null, value should be stored by key.
 * @return string $value from store or value passed in on set (ignored)
 */
class Client
	{
	public string $accessToken = '';

	public string $refreshToken = '';

	private string $authorizeURL = 'https://authz.constantcontact.com/oauth2/default/v1/authorize';

	private string $body = '';

	private \GuzzleHttp\HandlerStack $guzzleHandler;

	private string $host = '';

	private string $lastError = '';

	private string $next = '';

	private string $oauth2URL = 'https://authz.constantcontact.com/oauth2/default/v1/token';

	private array $scopes = [];

	private $sessionCallback = null;

	private int $statusCode = 200;

	private array $validScopes = ['account_read', 'account_update', 'contact_data', 'campaign_data', 'offline_access', ];

	/**
	 * Construct a client.
	 *
	 * By default, all scopes are enabled.  You can remove any, or set new ones.
	 */
	public function __construct(private string $clientAPIKey, private string $clientSecret, private string $redirectURI, public bool $PKCE = true)
		{
		// default to all scopes
		$this->scopes = \array_flip($this->validScopes);
		$this->host = $_SERVER['HTTP_HOST'] ?? '';
		$this->guzzleHandler = \GuzzleHttp\HandlerStack::create();
		$this->guzzleHandler->push(\Spatie\GuzzleRateLimiterMiddleware\RateLimiterMiddleware::perSecond(4));
		}

	/**
	 * Exchange an authorization code for an access token.
	 *
	 * Make this call by passing in the code present when the account owner is redirected back to you.
	 * The response will contain an 'access_token' and 'refresh_token'
	 *
	 * @param array $parameters passed to redirect URL
	 */
	public function acquireAccessToken(array $parameters) : bool
		{
		if (isset($parameters['error']))
			{
			$this->statusCode = 0;
			$this->lastError = $parameters['error'] . ': ' . ($parameters['error_description'] ?? 'Undefined');

			return false;
			}

		$expectedState = $this->session('PHPFUI\ConstantContact\state', null);

		if (($parameters['state'] ?? 'undefined') != $expectedState)
			{
			$this->statusCode = 0;
			$this->lastError = 'state is not correct';

			return false;
			}

		// Use cURL to get access token and refresh token
		$ch = \curl_init();

		// Create full request URL
		$params = [
			'code' => $parameters['code'],
			'redirect_uri' => $this->redirectURI,
			'grant_type' => 'authorization_code',
		];

		if ($this->PKCE)
			{
			$params['code_verifier'] = $this->session('PHPFUI\ConstantContact\code_verifier', null);
			}
		$url = $this->oauth2URL . '?' . \http_build_query($params);
		\curl_setopt($ch, CURLOPT_URL, $url);
		\curl_setopt($ch, CURLOPT_POSTFIELDS, \json_encode(['client_id' => $this->clientAPIKey, 'client_secret' => $this->clientSecret, 'code' => $parameters['code']]));

		$this->setAuthorization($ch);

		// Set method and to expect response
		\curl_setopt($ch, CURLOPT_POST, true);

		return $this->exec($ch);
		}

	public function addScope(string $scope) : self
		{
		if (! \in_array($scope, $this->validScopes))
			{
			throw new \PHPFUI\ConstantContact\Exception\InvalidParameter("Scope {$scope} is not valid, must be one of (" . \implode(',', $this->validScopes) . ')');
			}
		$this->scopes[$scope] = true;

		return $this;
		}

	/**
	 * Issue a delete request.  This is not normally called directly, but by the V3 namespace classes.
	 */
	public function delete(string $url) : bool
		{
		try
			{
			$guzzle = new \GuzzleHttp\Client(['headers' => $this->getHeaders(), 'handler' => $this->guzzleHandler, ]);
			$response = $guzzle->request('DELETE', $url);

			$this->process($response);

			return $this->statusCode >= 200 && $this->statusCode < 300;
			}
		catch (\GuzzleHttp\Exception\RequestException $e)
			{
			$this->lastError = $e->getMessage();
			$this->statusCode = $e->getResponse()->getStatusCode();
			}

		return false;
		}

	/**
	 * Issue a get request.  This is not normally called directly, but by the V3 namespace classes.
	 */
	public function get(string $url, array $parameters) : array
		{
		try
			{
			if ($parameters)
				{
				$paramString = \urldecode(\http_build_query($parameters));
				$paramString = \preg_replace('/\[[0-9]\]/', '', $paramString);

				if ($paramString)
					{
					$url .= '?' . $paramString;
					}
				}

			$guzzle = new \GuzzleHttp\Client(['headers' => $this->getHeaders(), 'handler' => $this->guzzleHandler, ]);
			$response = $guzzle->request('GET', $url);

			return $this->process($response);
			}
		catch (\GuzzleHttp\Exception\RequestException $e)
			{
			$this->lastError = $e->getMessage();
			$this->statusCode = $e->getResponse()->getStatusCode();
			}

		return [];
		}

	/**
	 * Generate the URL an account owner would use to allow your app
	 * to access their account.
	 *
	 * After visiting the URL, the account owner is prompted to log in and allow your app to access their account.
	 * They are then redirected to your redirect URL with the authorization code appended as a query parameter. e.g.:
	 * http://localhost:8888/?code={authorization_code}
	 */
	public function getAuthorizationURL() : string
		{
		$scopes = \implode('+', \array_keys($this->scopes));

		$state = \bin2hex(\random_bytes(8));
		$this->session('PHPFUI\ConstantContact\state', $state);
		$params = [
			'response_type' => 'code',
			'client_id' => $this->clientAPIKey,
			'redirect_uri' => $this->redirectURI,
			'scope' => $scopes,
			'state' => $state,
		];

		if ($this->PKCE)
			{
			[$code_verifier, $code_challenge] = $this->codeChallenge();

			// Store generated random state and code challenge based on RFC 7636
			// https://datatracker.ietf.org/doc/html/rfc7636#section-6.1
			$this->session('PHPFUI\ConstantContact\code_verifier', $code_verifier);
			$params['code_challenge'] = $code_challenge;
			$params['code_challenge_method'] = 'S256';
			}

		$url = $this->authorizeURL . '?' . \str_replace('%2B', '+', \http_build_query($params));	// hack %2B to + for stupid CC API bug

		return $url;
	}

	public function getBody() : string
		{
		return $this->body;
		}

	public function getLastError() : string
		{
		return $this->lastError;
		}

	public function getStatusCode() : int
		{
		return $this->statusCode;
		}

	/**
	 * Get the next result set
	 *
	 * @return array of data, empty if no more results
	 */
	public function next() : array
		{
		if (! $this->next)
			{
			return [];
			}

		$guzzle = new \GuzzleHttp\Client(['headers' => $this->getHeaders(), 'handler' => $this->guzzleHandler, ]);
		$response = $guzzle->request('GET', 'https://api.cc.email' . $this->next);

		return $this->process($response);
		}

	/**
	 * Issue a patch request.  This is not normally called directly, but by the V3 namespace classes.
	 */
	public function patch(string $url, array $parameters) : array
		{
		return $this->put($url, $parameters, 'PATCH');
		}

	/**
	 * Issue a post request.  This is not normally called directly, but by the V3 namespace classes.
	 */
	public function post(string $url, array $parameters) : array
		{
		try
			{
			$json = \json_encode($parameters['body'], JSON_PRETTY_PRINT);
			$guzzle = new \GuzzleHttp\Client(['headers' => $this->getHeaders(),
				'handler' => $this->guzzleHandler,
				'body' => $json, ]);
			$response = $guzzle->request('POST', $url);

			return $this->process($response);
			}
		catch (\GuzzleHttp\Exception\RequestException $e)
			{
			$this->lastError = $e->getMessage();
			$this->statusCode = $e->getResponse()->getStatusCode();
			}

		return [];
		}

	/**
	 * Issue a put request.  This is not normally called directly, but by the V3 namespace classes.
	 */
	public function put(string $url, array $parameters, string $method = 'PUT') : array
		{
		try
			{
			$json = \json_encode($parameters['body'], JSON_PRETTY_PRINT);
			$guzzle = new \GuzzleHttp\Client(['headers' => $this->getHeaders(
				[
					'Connection' => 'keep-alive',
					'Content-Length' => \strlen($json),
					'Accept-Encoding' => 'gzip, deflate',
					'Host' => $this->host,
					'Accept' => '*/*'
				]
			),
				'handler' => $this->guzzleHandler,
				'body' => $json, ]);

			$response = $guzzle->request($method, $url);

			return $this->process($response);
			}
		catch (\GuzzleHttp\Exception\RequestException $e)
			{
			$this->lastError = $e->getMessage();
			$this->statusCode = $e->getResponse()->getStatusCode();
			}

		return [];
		}

	/**
	 * Refresh the access token.
	 */
	public function refreshToken() : bool
		{
		// Use cURL to get a new access token and refresh token
		$ch = \curl_init();

		// Create full request URL
		$params = [
			'refresh_token' => $this->refreshToken,
			'grant_type' => 'refresh_token',
			'redirect_uri' => $this->redirectURI,
		];

		$url = $this->oauth2URL . '?' . \http_build_query($params);
		\curl_setopt($ch, CURLOPT_URL, $url);

		$this->setAuthorization($ch);

		// Set method and to expect response
		\curl_setopt($ch, CURLOPT_POST, true);
		\curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		\curl_setopt($ch, CURLOPT_POSTFIELDS, '');

		return $this->exec($ch);
		}

	public function removeScope(string $scope) : self
		{
		unset($this->scopes[$scope]);

		return $this;
		}

	public function setHost(string $host) : self
		{
		$this->host = $host;

		return $this;
		}

	public function setScopes(array $scopes) : self
		{
		$this->scopes = [];

		foreach ($scopes as $scope)
			{
			$this->addScope($scope);
			}

		return $this;
		}

	/**
	 * To avoid using built in PHP Sessions, set the callback to save values yourself
	 *
	 * Callback function signature:
	 *
	 * - function(string $key, string $value) : string // returns string $value from store or value passed in on set (ignored)
	 */
	public function setSessionCallback(callable $callback) : self
		{
		$this->sessionCallback = $callback;

		return $this;
		}

	private function base64url_encode(string $data) : string
		{
		return \rtrim(\strtr(\base64_encode($data), '+/', '-_'), '=');
		}

	/**
	 * Generate code_verifier and code_challenge for rfc7636 PKCE.
	 * https://datatracker.ietf.org/doc/html/rfc7636#appendix-B
	 *
	 * @return array [code_verifier, code_challenge].
	 */
	private function codeChallenge(?string $code_verifier = null) : array
		{
		$gen = static function()
			{
			$strings = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-._~';
			$length = \random_int(43, 128);

			for ($i = 0; $i < $length; $i++)
				{
				yield $strings[\random_int(0, 65)];
				}
			};

		$code = $code_verifier ?? \implode('', \iterator_to_array($gen()));

		if (! \preg_match('/[A-Za-z0-9-._~]{43,128}/', $code))
			{
			return ['', ''];
			}

		return [$code, $this->base64url_encode(\pack('H*', \hash('sha256', $code)))];
		}

	private function exec(\CurlHandle $ch) : bool
		{
		\curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Make the call
		$result = \curl_exec($ch);
		$this->lastError = '';
		$this->statusCode = 0;

		if ($result)
			{
			$data = \json_decode($result, true);

			if (isset($data['error']))
				{
				$this->lastError = $data['error'] . ': ' . ($data['error_description'] ?? 'Undefined');
				}
			$this->accessToken = $data['access_token'] ?? '';
			$this->refreshToken = $data['refresh_token'] ?? '';

			\curl_close($ch);

			return isset($data['access_token'], $data['refresh_token']);
			}

		$this->statusCode = \curl_errno($ch);
		$this->lastError = \curl_error($ch);
		\curl_close($ch);

		return false;
		}

	private function getHeaders(array $additional = []) : array
		{
		return \array_merge([
			'Cache-Control' => 'no-cache',
			'Authorization' => 'Bearer ' . $this->accessToken,
			'Content-Type' => 'application/json',
			'Accept' => 'application/json',
		], $additional);
		}

	private function process(\Psr\Http\Message\ResponseInterface $response) : array
		{
		$this->next = '';
		$this->lastError = $response->getReasonPhrase();
		$this->statusCode = $response->getStatusCode();
		$this->body = $response->getBody();
		$data = \json_decode($this->body, true);

		if (isset($data['_links']['next']['href']))
			{
			$this->next = $data['_links']['next']['href'];
			}

		if (null !== $data)
			{
			return $data;
			}
		$this->lastError = \json_last_error_msg();
		$this->statusCode = \json_last_error();

		return [];
		}

	private function session(string $key, ?string $value) : string
		{
		if ($this->sessionCallback)
			{
			return \call_user_func($this->sessionCallback, $key, $value);
			}

		if (PHP_SESSION_ACTIVE !== \session_status())
			{
			throw new \PHPFUI\ConstantContact\Exception('session not started. Call session_start() or use \PHPFUI\ConstantContact\Client->setSessionCallback');
			}

		if (null === $value)
			{
			$value = $_SESSION[$key] ?? '';
			unset($_SESSION[$key]);

			return $value;
			}

		return $_SESSION[$key] = $value;
		}

	private function setAuthorization(\CurlHandle $ch) : void
		{
		// Set authorization header
		// Make string of "API_KEY:SECRET"
		$auth = $this->clientAPIKey . ':' . $this->clientSecret;
		// Base64 encode it
		$credentials = \base64_encode($auth);
		// Create and set the Authorization header to use the encoded credentials
		$headers = ['Authorization: Basic ' . $credentials, 'cache-control: no-cache', ];
		\curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		}
	}
