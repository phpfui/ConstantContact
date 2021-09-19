<?php

namespace PHPFUI\ConstantContact\Definition;

class TagPut extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $name The new tag name to use. The tag name must be unique.
	 */

	protected static array $fields = [
		'name' => 'string',

	];

	protected static array $minLength = [
		'name' => 1,

	];

	protected static array $maxLength = [
		'name' => 255,

	];
	}