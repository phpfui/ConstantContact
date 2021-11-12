<?php

namespace PHPFUI\ConstantContact;

class Client
  {
	public string $accessToken = '';

	public string $refreshToken = '';

  private string $oauth2URL = 'https://idfed.constantcontact.com/as/token.oauth2';

  private string $lastError = '';

	private string $body = '';

	private string $host = '';

  private int $statusCode = 200;

  private array $scopes = [];

  private array $validScopes = ['account_read', 'account_update', 'contact_data', 'campaign_data', ];

	private string $next = '';

	/**
	 * Construct a client.
	 *
	 * By default, all scopes are enabled.  You can remove any, or
	 * set new ones.
	 */
  public function __construct(private string $clientAPIKey, private string $clientSecret, private string $redirectURI = 'https://localhost/')
		{
		// default to all scopes
		$this->scopes = \array_flip($this->validScopes);
		$this->host = $_SERVER['HTTP_HOST'] ?? '';
		}

	public function getBody() : string
		{
		return $this->body;
		}

	public function next() : array
		{
		if (! $this->next)
			{
			return [];
			}

		$guzzle = new \GuzzleHttp\Client(['headers' => $this->getHeaders()]);
		$response = $guzzle->request('GET', 'https://api.cc.email' . $this->next);

		return $this->process($response);
		}

	public function setHost(string $host) : self
		{
		$this->host = $host;

		return $this;
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

  public function removeScope(string $scope) : self
		{
		unset($this->scopes[$scope]);

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

	public function getLastError() : string
		{
		return $this->lastError;
		}

	public function getStatusCode() : int
		{
		return $this->statusCode;
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
		$scopes = \implode('%2B', \array_keys($this->scopes));
		$authURL = "https://api.cc.email/v3/idfed?client_id={$this->clientAPIKey}&response_type=code&redirect_uri={$this->redirectURI}&scope={$scopes}";

		return $authURL;
		}

  /**
   * Exchange an authorization code for an access token.
   *
   * Make this call by passing in the code present when the account owner is redirected back to you.
   * The response will contain an 'access_token' and 'refresh_token'
   *
   * @param string $code - Authorization Code
   */
  public function acquireAccessToken(string $code) : bool
		{
		// Use cURL to get access token and refresh token
		$ch = \curl_init();

		// Create full request URL
		$url = "{$this->oauth2URL}?code={$code}&redirect_uri={$this->redirectURI}&grant_type=authorization_code";
		\curl_setopt($ch, CURLOPT_URL, $url);

		$this->setAuthorization($ch);

		// Set method and to expect response
		\curl_setopt($ch, CURLOPT_POST, true);

		return $this->exec($ch);
		}

  /**
   * Refresh the access token.
   *
   * @return string new access token or 'Error' for error
   */
  public function refreshToken() : string
		{
		// Use cURL to get a new access token and refresh token
		$ch = \curl_init();

		// Create full request URL
		$url = "{$this->oauth2URL}?refresh_token={$this->refreshToken}&grant_type=refresh_token";
		\curl_setopt($ch, CURLOPT_URL, $url);

		$this->setAuthorization($ch);

		// Set method and to expect response
		\curl_setopt($ch, CURLOPT_POST, true);
		\curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		\curl_setopt($ch, CURLOPT_POSTFIELDS, '');

		return $this->exec($ch);
		}

	public function patch(string $url, array $parameters) : array
		{
		return $this->put($url, $parameters, 'PATCH');
		}

	public function put(string $url, array $parameters, string $method = 'PUT') : array
		{
		try
			{
			$json = \json_encode($parameters['body'], JSON_PRETTY_PRINT);
			$guzzle = new \GuzzleHttp\Client(['headers' => $this->getHeaders([
				'Connection' => 'keep-alive',
				'Content-Length' => \strlen($json),
				'Accept-Encoding' => 'gzip, deflate',
				'Host' => $this->host,
				'Accept' => '*/*']),
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

	public function delete(string $url) : bool
		{
		try
			{
			$guzzle = new \GuzzleHttp\Client(['headers' => $this->getHeaders()]);
			$response = $guzzle->request('DELETE', $url);

			$this->process($response);

			return 204 == $this->statusCode;
			}
		catch (\GuzzleHttp\Exception\RequestException $e)
			{
			$this->lastError = $e->getMessage();
			$this->statusCode = $e->getResponse()->getStatusCode();
			}

		return false;
		}

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

			$guzzle = new \GuzzleHttp\Client(['headers' => $this->getHeaders()]);
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

	public function post(string $url, array $parameters) : array
		{
		try
			{
			$json = \json_encode($parameters['body'], JSON_PRETTY_PRINT);
			$guzzle = new \GuzzleHttp\Client(['headers' => $this->getHeaders(),
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
			$retVal = isset($data['access_token'], $data['refresh_token']);
			$this->accessToken = $data['access_token'] ?? 'Error';
			$this->refreshToken = $data['refresh_token'] ?? 'Error';

			\curl_close($ch);

			return $retVal;
			}

		$this->statusCode = \curl_errno($ch);
		$this->lastError = \curl_error($ch);
		\curl_close($ch);

		return false;
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

	private function getHeaders(array $additional = []) : array
		{
		return \array_merge([
			'Cache-Control' => 'no-cache',
			'Authorization' => 'Bearer ' . $this->accessToken,
			'Content-Type' => 'application/json',
			'Accept' => 'application/json',
		], $additional);
		}

	private function process(\GuzzleHttp\Psr7\Response $response) : array
		{
		$this->lastError = $response->getReasonPhrase();
		$this->statusCode = $response->getStatusCode();
		$this->body = $response->getBody();
		$data = \json_decode($this->body, true);
		$this->next = $data['_links']['next']['href'] ?? '';

		if (null !== $data)
			{
			return $data;
			}
		$this->lastError = \json_last_error_msg();
		$this->statusCode = \json_last_error();

		return [];
		}
  }
