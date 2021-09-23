<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $name Specify a unique name to use to identify the tag. Tag names must be at least one character in length and not more than 255 characters.
	 * @var string $tag_source The source used to identify the contacts to tag.
	 */

class TagPost extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'name' => 'string',
		'tag_source' => 'string',

	];

	protected static array $minLength = [
		'name' => 1,

	];

	protected static array $maxLength = [
		'name' => 255,

	];
	}