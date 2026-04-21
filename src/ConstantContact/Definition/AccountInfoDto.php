<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $account_url The account URL of the connected user's profile. Note: Facebook & Instagram do not support this.
 * @property string $display_name Display name of the connected user
 * @property string $image_url URL of the connected user's avatar or image
 * @property string $network The social network this account belongs to
 * @property string $network_account_id The user identifier on the given network. Note: this is the network _account_ id not the _profile_ id.
 * @property string $username Username of the connected user on the social network
 */
class AccountInfoDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'account_url' => 'string',
		'display_name' => 'string',
		'image_url' => 'string',
		'network' => 'string',
		'network_account_id' => 'string',
		'username' => 'string',

	];
	}
