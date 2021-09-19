<?php

namespace PHPFUI\ConstantContact\Definition;

class Activities extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var array $activities A list of bulk activity jobs and status submitted by the account over the past 10 days.
	 */

	protected static array $fields = [
		'activities' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\PagingLinks',

	];
	}