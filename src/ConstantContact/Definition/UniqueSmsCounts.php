<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $sends The total number of unique sends.
 * @property int $delivers The total number of SMS delivered.
 * @property int $opens The total number of unique opens.
 * @property int $clicks The total number of unique clicks.
 * @property int $optouts The total number of unique opt-outs (unsubscribes).
 */
class UniqueSmsCounts extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'sends' => 'int',
		'delivers' => 'int',
		'opens' => 'int',
		'clicks' => 'int',
		'optouts' => 'int',

	];
	}
