<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3;

class Idfed extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/idfed');
		}


	/**
	 * V3 Authorization service endpoint for OAuth 2.0 flows
	 *
	 * The authorization request is part of the OAuth 2.0 authorization process
	 * for both the server and client flows.
	 *
	 * @param string $response_type Specifies the type requested from the authorization service. For server flow set to code; for client flow set to token.
	 * @param string $client_id The API key for the client.
	 * @param string $redirect_uri Tells the Authorization service where to send the user once access is granted. This must be the same redirect_uri associated with your_API_key
	 */
	public function get(string $response_type, string $client_id, string $redirect_uri) : array
		{
		if (null !== $response_type)
			{
			$validValues = ['code' , 'token'];
			if (! in_array($response_type, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter response_type with value '{$response_type}' is not one of (" . implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}
		return $this->doGet(['response_type' => $response_type, 'client_id' => $client_id, 'redirect_uri' => $redirect_uri, ]);
		}
	}