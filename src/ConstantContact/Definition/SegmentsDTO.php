<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $segments Lists all segments for the account.
	 * @var PHPFUI\ConstantContact\Definition\Links $_links HAL property that contains next link if applicable.
	 */

class SegmentsDTO extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'segments' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\Links',

	];
	}