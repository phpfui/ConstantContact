<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $name Specify a unique name to use to identify the tag. Tag names must be at least one character in length and not more than 255 characters.
 * @property string $tag_source The source used to identify the contacts to tag.
 */
class TagPost extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'name' => 'string',
		'tag_source' => 'string',

	];

	protected static array $maxLength = [
		'name' => 255,

	];

	protected static array $minLength = [
		'name' => 1,

	];
	}
