<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var \PHPFUI\ConstantContact\UUID $custom_field_id The unique ID for the <code>custom_field</code>.
	 * @var string $value The value of the <code>custom_field</code>.
	 */

class CreateOrUpdateContactCustomField extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'custom_field_id' => '\PHPFUI\ConstantContact\UUID',
		'value' => 'string',

	];

	protected static array $maxLength = [
		'value' => 255,

	];
	}