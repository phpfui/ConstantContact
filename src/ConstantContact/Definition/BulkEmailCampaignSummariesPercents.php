<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $click Aggregated click rate for campaigns on the current page.
 * @property int $open Aggregated open rate for campaigns on the current page.
 * @property int $did_not_open Aggregated did-not-open rate for campaigns on the current page.
 * @property int $bounce Aggregated bounce rate for campaigns on the current page.
 * @property int $unsubscribe Aggregated unsubscribe (optout) rate for campaigns on the current page.
 */
class BulkEmailCampaignSummariesPercents extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'click' => 'int',
		'open' => 'int',
		'did_not_open' => 'int',
		'bounce' => 'int',
		'unsubscribe' => 'int',

	];
	}
