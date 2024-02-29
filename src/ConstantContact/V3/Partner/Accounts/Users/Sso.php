<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Partner\Accounts\Users;

class Sso extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/partner/accounts/{encoded_account_id}/users/sso');
		}

	/**
	 * POST a User Under a Partner's SSO-Enabled Client Account
	 *
	 * Use this endpoint to create a new user under a partner client account
	 * that has the Single Sign On (SSO) for all users feature is enabled.
	 *
	 *
	 * @param string $encoded_account_id The encoded account ID that identifies the partner's client account to which to add the new user. 
	 * @param \PHPFUI\ConstantContact\Definition\SSOUser $SSO_User The JSON payload used to create a new user under the specified partner's client account. All request body properties are required (`first_name`, `last_name`, `role_name`, `contact_email`, `login_name`, `external_id`, `external_provider`).
	 */
	public function post(string $encoded_account_id, \PHPFUI\ConstantContact\Definition\SSOUser $SSO_User) : array
		{

		return $this->doPost(['encoded_account_id' => $encoded_account_id, 'SSO_User' => $SSO_User->getData(), ]);
		}
	}
