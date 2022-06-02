<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3;

class TokenInfo extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/token_info');
		}

	/**
	 * Access Token Information
	 *
	 * IMPORTANT NOTE: As of March 31, 2022, this POST method is being depreciated.
	 * To view the scopes associated with an access token, parse the access
	 * token (JWT) claims.
	 *
	 *
	 * @param \PHPFUI\ConstantContact\Definition\AuthToken $auth_token A JSON request payload containing a valid OAuth2.0 access token.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\AuthToken $auth_token) : array
		{

		return $this->doPost(['auth_token' => $auth_token->getData(), ]);
		}
	}
