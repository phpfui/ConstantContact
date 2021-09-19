<?php

namespace PHPFUI\ConstantContact\Definition;

class CustomFieldInput extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $label The display name for the custom_field shown in the UI as free-form text
	 * @var string $type Specifies the type of value the custom_field field accepts: string or date.
	 */

	protected static array $fields = [
		'label' => 'string',
		'type' => ['string', 'date'],

	];

	protected static array $maxLength = [
		'label' => 50,

	];
	}