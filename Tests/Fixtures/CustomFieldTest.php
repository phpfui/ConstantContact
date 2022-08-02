<?php

namespace Tests\Fixtures;

class CustomFieldTest extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'cf:custom_field_name' => 'string',

	];

	protected static array $maxLength = [
		'cf:custom_field_name' => 255,

	];
	}
