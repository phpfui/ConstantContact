<?php

namespace PHPFUI\ConstantContact\Definition;

class ContactCustomField extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var PHPFUI\ConstantContact\UUID $custom_field_id The custom_field's unique ID
	 * @var string $value The custom_field value.
	 */

	protected static array $fields = [
		'custom_field_id' => 'PHPFUI\ConstantContact\UUID',
		'value' => 'string',

	];

	protected static array $maxLength = [
		'value' => 255,

	];
	}