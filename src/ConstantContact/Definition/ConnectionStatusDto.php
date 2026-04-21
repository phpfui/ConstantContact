<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $error There was an unexpected error accessing the account.
 * @property bool $has_token True if there is a token for this network type in the token-svc db
 * @property bool $is_active_user At this time, a user is considered active if the user has any connected Profiles
 * @property bool $rate_limited Whether this account or our app is currently rate-limited
 * @property int $status The status returned from the given network's API when retrieving the account. Can also beour own internal error
 * @property bool $token_has_scopes Whether or not the token associated with this user has the scopes necessary to utilize social-reach-svc
 * @property bool $token_is_valid True if the token marked valid in token-svc and can be successfully used to fetch basic user data from the network
 */
class ConnectionStatusDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'error' => 'string',
		'has_token' => 'bool',
		'is_active_user' => 'bool',
		'rate_limited' => 'bool',
		'status' => 'int',
		'token_has_scopes' => 'bool',
		'token_is_valid' => 'bool',

	];
	}
