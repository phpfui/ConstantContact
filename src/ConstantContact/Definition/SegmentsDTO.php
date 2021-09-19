<?php

namespace PHPFUI\ConstantContact\Definition;

class SegmentsDTO extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var array $segments Lists all segments for the account.
	 * @var PHPFUI\ConstantContact\Definition\Links $_links HAL property that contains next link if applicable.
	 */

	protected static array $fields = [
		'segments' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\Links',

	];
	}