<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $create_time The create time of the event.
 * @property string $email_address The email address to use to when replying to email, as well as the email that receives SO notifications.
 * @property string $from_email_address The email address to use for sending confirmation emails.
 * @property string $last_update_time The time the event was last modified. ISO format
 * @property string $name The contact name to associate with the event.
 * @property string $organization_name The organization name to associate with the event.
 * @property string $phone_number The phone number to associate with the event.
 */
class ContactDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'create_time' => 'string',
		'email_address' => 'string',
		'from_email_address' => 'string',
		'last_update_time' => 'string',
		'name' => 'string',
		'organization_name' => 'string',
		'phone_number' => 'string',

	];

	protected static array $maxLength = [
		'email_address' => 128,
		'from_email_address' => 128,
		'name' => 100,
		'organization_name' => 255,
		'phone_number' => 25,

	];

	protected static array $minLength = [
		'email_address' => 0,
		'from_email_address' => 0,
		'name' => 0,
		'organization_name' => 0,
		'phone_number' => 1,

	];
	}
