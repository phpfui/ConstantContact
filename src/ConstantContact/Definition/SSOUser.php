<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $first_name The client account user's first name.
 * @property string $last_name The client account user's last name.
 * @property string $role_name The role (<code>account_manager</code> or <code>campaign_creator</code>) to assign the client account user.
 * @property string $contact_email The unique email address to associate with the new client account user.
 * @property string $login_name The login name to associate with the new client account user.
 * @property string $external_id The unique ID used to identify the client account user to the external authenticator.
 * @property string $external_provider The unique name used to identify the external provider used to authenticate the client account user. For a list of external providers, contact the Constant Contact Partner Team.
 */
class SSOUser extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'first_name' => 'string',
		'last_name' => 'string',
		'role_name' => 'string',
		'contact_email' => 'string',
		'login_name' => 'string',
		'external_id' => 'string',
		'external_provider' => 'string',

	];

	protected static array $maxLength = [
		'first_name' => 80,
		'last_name' => 80,
		'contact_email' => 80,
		'login_name' => 50,
		'external_id' => 255,
		'external_provider' => 80,

	];
	}
