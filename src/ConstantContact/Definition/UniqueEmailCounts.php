<?php

namespace PHPFUI\ConstantContact\Definition;

class UniqueEmailCounts extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var int $sends The total number of unique sends.
	 * @var int $opens The total number of unique opens.
	 * @var int $clicks The total number of unique clicks.
	 * @var int $forwards The total number of unique forwards.
	 * @var int $optouts The total number of unique optouts (unsubscribes).
	 * @var int $abuse The total number of unique abuse count (spam).
	 * @var int $bounces The total number of unique bounce count.
	 * @var int $not_opened The total number of unique non-opens
	 */

	protected static array $fields = [
		'sends' => 'int',
		'opens' => 'int',
		'clicks' => 'int',
		'forwards' => 'int',
		'optouts' => 'int',
		'abuse' => 'int',
		'bounces' => 'int',
		'not_opened' => 'int',

	];
	}