<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var PHPFUI\ConstantContact\Definition\Next $next HAL property that contains next link if applicable.
	 */

class Links extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'next' => 'PHPFUI\\ConstantContact\\Definition\\Next',

	];
	}