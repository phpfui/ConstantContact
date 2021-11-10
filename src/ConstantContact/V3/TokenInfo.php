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
	 * Use this POST method to retrieve the list of authorization scopes associated
	 * with an OAuth2.0 access token.
	 *
	 * You cannot retrieve authorization information using expired access tokens.
	 *
	 *
	 *
	 * @param \PHPFUI\ConstantContact\Definition\AuthToken $auth_token A JSON request payload containing a valid OAuth2.0 access token.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\AuthToken $auth_token) : array
		{

		return $this->doPost(['auth_token' => $auth_token->getData(), ]);
		}
	}
