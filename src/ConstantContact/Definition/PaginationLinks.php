<?php

namespace PHPFUI\ConstantContact\Definition;

class PaginationLinks extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var PHPFUI\ConstantContact\Definition\Link2 $next Contains the next page link, if applicable.
	 */

	protected static array $fields = [
		'next' => 'PHPFUI\\ConstantContact\\Definition\\Link2',

	];
	}