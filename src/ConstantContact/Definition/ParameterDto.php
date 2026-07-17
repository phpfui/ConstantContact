<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $operator Comparison operator for the parameter (e.g. EQUALS, CONTAINS, NOT_EQUALS).
 * @property string $parameter_name Name of the parameter (e.g., list_ids, create_source, url).
 * @property array $parameter_list_value [DEPRECATED] List of string values for the parameter when type is LIST. Supported for backwards compatibility; prefer parameter_value.
 * @property string $parameter_string_value [DEPRECATED] String value for the parameter when type is STRING. Supported for backwards compatibility; prefer parameter_value.
 * @property \PHPFUI\ConstantContact\Definition\ParameterValue $parameter_value The parameter value: a string or array of strings depending on type (e.g., STRING → single value, LIST → array of list IDs). Use this instead of parameter_string_value / parameter_list_value moving forward.
 * @property \PHPFUI\ConstantContact\Definition\Rule $rule Rule structure for RULE-type parameters (e.g., engagement level triggers).
 * @property string $type Parameter type. Common trigger types: STRING (single value), LIST (array), WEB_TRACKING (page visit).
 */
class ParameterDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'operator' => 'string',
		'parameter_name' => 'string',
		'parameter_list_value' => 'array',
		'parameter_string_value' => 'string',
		'parameter_value' => '\PHPFUI\ConstantContact\Definition\ParameterValue',
		'rule' => '\PHPFUI\ConstantContact\Definition\Rule',
		'type' => 'string',

	];
	}
