<?php

namespace PHPFUI\ConstantContact\Definition;

class Tags extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var array $tags Lists all tags and provides tag details.
	 * @var PHPFUI\ConstantContact\Definition\PagingLinks2 $_links HAL property that contains next link if applicable.
	 */

	protected static array $fields = [
		'tags' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\PagingLinks2',

	];
	}