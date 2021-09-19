<?php

namespace PHPFUI\ConstantContact\Definition;

class ActivityTaggingStatus extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var int $items_total_count The total number of items processed for the requested activity.
	 * @var int $items_completed_count The total number of items for which processing completed for the requested activity.
	 */

	protected static array $fields = [
		'items_total_count' => 'int',
		'items_completed_count' => 'int',

	];
	}