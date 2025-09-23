<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $label The custom field name to display in the UI (free-form text).
 * @property array<\PHPFUI\ConstantContact\Definition\CustomFieldChoicePutRequest> $choices Array of choices for custom fields of type: <code>single_select</code> or <code>multi_select</code>. Maximum number of elements for <code>checkbox</code> and <code>radio</code> display types is 20. Maximum number of elements for a <code>dropdown</code> is 100.
 */
class CustomFieldPutRequest extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'label' => 'string',
		'choices' => 'array<\PHPFUI\ConstantContact\Definition\CustomFieldChoicePutRequest>',

	];

	protected static array $maxLength = [
		'label' => 50,
		'choices' => 100,

	];
	}
