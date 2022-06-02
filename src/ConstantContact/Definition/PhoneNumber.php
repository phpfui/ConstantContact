<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $phone_number_id Unique ID for the phone number
 * @property string $phone_number The contact's phone number, 1 of 2 allowed per contact, no more than 25 characters
 * @property string $kind Describes the type of phone number; valid values are home, work, mobile, or other.
 * @property \PHPFUI\ConstantContact\DateTime $created_at Date and time that the street address was created, in ISO-8601 format. System generated.
 * @property \PHPFUI\ConstantContact\DateTime $updated_at Date and time that the phone_number was last updated, in ISO-8601 format. System generated.
 * @property string $update_source Identifies who last updated the phone_number; valid values are Contact or Account
 * @property string $create_source Describes who added the phone_number; valid values are Contact or Account.
 */
class PhoneNumber extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'phone_number_id' => '\PHPFUI\ConstantContact\UUID',
		'phone_number' => 'string',
		'kind' => ['home', 'work', 'mobile', 'other'],
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',
		'update_source' => ['Account', 'Contact'],
		'create_source' => ['Account', 'Contact'],

	];

	protected static array $maxLength = [
		'phone_number' => 25,

	];
	}
