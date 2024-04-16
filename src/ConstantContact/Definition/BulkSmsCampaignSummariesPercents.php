<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $deliver The aggregated SMS delivery rate for all campaigns on the current results page.
 * @property int $click The aggregated click rate for all campaigns on the current results page.
 * @property int $bounce The aggregated bounce rate for all campaigns on the current results page.
 * @property int $unsubscribe The aggregated unsubscribe (opt-out) rate for all campaigns on the current results page.
 */
class BulkSmsCampaignSummariesPercents extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'deliver' => 'int',
		'click' => 'int',
		'bounce' => 'int',
		'unsubscribe' => 'int',

	];
	}
