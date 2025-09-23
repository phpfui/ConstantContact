<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $custom_field_id The system generated ID that uniquely identifies a <code>custom_field</code>.
 * @property string $label The custom field name to display in the UI (free-form text).
 * @property string $name The unique custom field name constructed from the label by replacing blanks with underscores.
 * @property string $type The data value type the custom field accepts.
 * @property \PHPFUI\ConstantContact\Definition\CustomFieldMetadata $metadata
 * @property int $version For <code>datetime</code> data types, this is the version number associated with the custom field.
 * @property array<\PHPFUI\ConstantContact\Definition\CustomFieldChoice> $choices Choices available for <code>single_select</code> and <code>multi_select</code> type custom fields. The maximum number of elements for <code>radio</code> or <code>checkbox</code> display types is 20. Maximum number of elements for a <code>dropdown</code> is 100.
 * @property \PHPFUI\ConstantContact\DateTime $updated_at System generated date and time that the resource was updated, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $created_at Date and time that the resource was created, in ISO-8601 format. System generated.
 */
class CustomField extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'custom_field_id' => '\PHPFUI\ConstantContact\UUID',
		'label' => 'string',
		'name' => 'string',
		'type' => 'string',
		'metadata' => '\PHPFUI\ConstantContact\Definition\CustomFieldMetadata',
		'version' => 'int',
		'choices' => 'array<\PHPFUI\ConstantContact\Definition\CustomFieldChoice>',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',
		'created_at' => '\PHPFUI\ConstantContact\DateTime',

	];

	protected static array $maxLength = [
		'label' => 50,
		'name' => 50,
		'type' => 20,
		'choices' => 100,

	];
	}
