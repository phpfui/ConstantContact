<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $sends The total number of unique sends.
 * @property int $opens The total number of unique opens.
 * @property int $clicks The total number of unique clicks.
 * @property int $forwards The total number of unique forwards.
 * @property int $optouts The total number of unique optouts (unsubscribes).
 * @property int $abuse The total number of unique abuse count (spam).
 * @property int $bounces The total number of unique bounce count.
 * @property int $not_opened The total number of unique non-opens
 */
class UniqueEmailCounts extends \PHPFUI\ConstantContact\Definition\Base
	{
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
