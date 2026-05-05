<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $error A message indicating that there was an unexpected error accessing the social network account.
 * @property bool $has_token <code>true</code> if the integration has an authorization token for this social network account.
 * @property bool $is_active_user A user is considered active if the user has any connected profiles for the social network account.
 * @property bool $rate_limited Whether this social network account or the Constant Contact application is currently rate-limited by the social network provider.
 * @property int $status The status returned from the given network's API when retrieving the account. This is typically only set when <code>error</code> is set.
 * @property bool $token_has_scopes Whether the token associated with this user's social account integration has the scopes necessary to use Constant Contact social functionality.
 * @property bool $token_is_valid <code>true</code> if the token for this social network is currently valid and can be successfully used to fetch data from the network.
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
