<?php

namespace PHPFUI\ConstantContact\Definition;

class CreateOrUpdateContactCustomField extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var PHPFUI\ConstantContact\UUID $custom_field_id The unique ID for the <code>custom_field</code>.
	 * @var string $value The value of the <code>custom_field</code>.
	 */

	protected static array $fields = [
		'custom_field_id' => 'PHPFUI\ConstantContact\UUID',
		'value' => 'string',

	];

	protected static array $maxLength = [
		'value' => 255,

	];
	}