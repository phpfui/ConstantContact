<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $address The contact's email address
	 * @var string $permission_to_send Identifies the type of permission that the Constant Contact account has been granted to send email to the contact. Types of permission: explicit, implicit, not_set, pending_confirmation, temp_hold, unsubscribed.
	 */

class EmailAddressPost extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'address' => 'string',
		'permission_to_send' => ['implicit', 'explicit', 'pending_confirmation', 'unsubscribed', 'temp_hold', 'not_set'],

	];

	protected static array $maxLength = [
		'address' => 80,

	];
	}