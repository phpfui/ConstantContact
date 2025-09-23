<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $display_type Determines how Constant Contact renders a <code>single_select</code> or <code> multi_select</code> field.
 * @property bool $allow_negative For type <code>number</code>, determines if a value can be negative. By default, this value is false for the type <code>number</code>.
 * @property int $decimal_places For types <code>number</code> and <code>currency</code>, determines the number of decimal places possible in the value.
 * @property string $currency_code For type <code>currency</code>, specifies the three-letter currency code to assign.
 * @property bool $integer For types <code>number</code> and <code>currency</code>, determines whether the custom field should store only whole numbers (integers) without decimal values. If the <code>integer</code> is set to <code>false</code>, the <code>decimal_places</code> must be between 1 and 4.
 * @property string $display_format Specifies the display format for date fields in the user interface. If not specified for a date type field, defaults to <code>YYYY-MM-DD</code> format. Valid only for version 2 type dates (values are stored as actual dates to support date comparisons and validations).
 */
class CustomFieldMetadata extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'display_type' => 'string',
		'allow_negative' => 'bool',
		'decimal_places' => 'int',
		'currency_code' => 'string',
		'integer' => 'bool',
		'display_format' => 'string',

	];
	}
