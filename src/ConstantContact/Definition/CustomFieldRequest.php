<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $label The custom field name to display in the UI (free-form text).
 * @property string $type The type of data to store in the custom field.
 * @property \PHPFUI\ConstantContact\Definition\CustomFieldMetadata $metadata
 * @property array<\PHPFUI\ConstantContact\Definition\CustomFieldChoiceRequest> $choices Array of choices for custom fields of type: <code>single_select</code> or <code>multi_select</code>. Maximum number of elements for <code>checkbox</code> and <code>radio</code> display types is 20. Maximum number of elements for a <code>dropdown</code> is 100.
 * @property int $version Available if data type is <code>data</code>. Displays <code>1</code> if using legacy date fields where values are stored as strings. Displays <code>2</code> if using new date fields where values are stored as actual dates to support date comparisons and validations.
 */
class CustomFieldRequest extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'label' => 'string',
		'type' => 'string',
		'metadata' => '\PHPFUI\ConstantContact\Definition\CustomFieldMetadata',
		'choices' => 'array<\PHPFUI\ConstantContact\Definition\CustomFieldChoiceRequest>',
		'version' => 'int',

	];

	protected static array $maxLength = [
		'label' => 50,
		'type' => 20,
		'choices' => 100,

	];
	}
