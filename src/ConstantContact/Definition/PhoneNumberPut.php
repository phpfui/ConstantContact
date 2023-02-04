<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $phone_number The contact's phone number.
 * @property string $kind Identifies the type of phone number; valid values are home, work, mobile, or other.
 */
class PhoneNumberPut extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'phone_number' => 'string',
		'kind' => ['home', 'work', 'mobile', 'other'],

	];

	protected static array $maxLength = [
		'phone_number' => 25,

	];
	}
