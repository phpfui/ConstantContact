<?php

namespace PHPFUI\ConstantContact\Definition;

class ActivityGenericStatus extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var int $items_total_count The total number of tags that this activity will delete.
	 * @var int $items_completed_count The number of tags that this activity has currently deleted.
	 */

	protected static array $fields = [
		'items_total_count' => 'int',
		'items_completed_count' => 'int',

	];
	}