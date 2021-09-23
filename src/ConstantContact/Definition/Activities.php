<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $activities A list of bulk activity jobs and status submitted by the account over the past 10 days.
	 */

class Activities extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'activities' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\PagingLinks',

	];
	}