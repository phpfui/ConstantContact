<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $custom_field_id The custom_field's unique ID
 * @property string $label The display name for the custom_field shown in the UI as free-form text
 * @property string $name Unique name for the custom_field constructed from the label by replacing blanks with underscores.
 * @property string $type Specifies the type of value the custom_field field accepts: string or date.
 * @property \PHPFUI\ConstantContact\DateTime $updated_at System generated date and time that the resource was updated, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $created_at Date and time that the resource was created, in ISO-8601 format. System generated.
 */
class CustomFieldResource extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'custom_field_id' => '\PHPFUI\ConstantContact\UUID',
		'label' => 'string',
		'name' => 'string',
		'type' => 'string',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',
		'created_at' => '\PHPFUI\ConstantContact\DateTime',

	];

	protected static array $maxLength = [
		'label' => 50,
		'name' => 50,

	];
	}
