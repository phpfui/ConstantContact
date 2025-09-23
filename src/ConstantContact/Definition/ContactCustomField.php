<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $custom_field_id The custom field's unique ID
 * @property string $value The custom field value.
 * @property array $choice_ids For <code>>multi_select</code> and <code>single_select</code> data types, the ID that uniquely identifies the choice associated with a the custom field.
 */
class ContactCustomField extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'custom_field_id' => '\PHPFUI\ConstantContact\UUID',
		'value' => 'string',
		'choice_ids' => 'array',

	];

	protected static array $maxLength = [
		'value' => 255,

	];
	}
