<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $sends The total number of unique sends.
 * @property int $clicks The total number of unique clicks.
 * @property int $optouts The total number of unique opt-outs (unsubscribes).
 * @property int $delivers The total number of SMS delivered.
 * @property int $bounces The total number of unique bounces.
 */
class UniqueSmsCounts extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'sends' => 'int',
		'clicks' => 'int',
		'optouts' => 'int',
		'delivers' => 'int',
		'bounces' => 'int',

	];
	}
