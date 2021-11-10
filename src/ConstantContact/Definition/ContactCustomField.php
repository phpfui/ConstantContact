<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var \PHPFUI\ConstantContact\UUID $custom_field_id The custom_field's unique ID
 * @var string $value The custom_field value.
 */
class ContactCustomField extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'custom_field_id' => '\PHPFUI\ConstantContact\UUID',
		'value' => 'string',

	];

	protected static array $maxLength = [
		'value' => 255,

	];
	}
