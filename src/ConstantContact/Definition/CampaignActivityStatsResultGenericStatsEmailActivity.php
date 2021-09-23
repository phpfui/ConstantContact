<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $campaign_id The unique ID used to identify the campaign (UUID).
	 * @var string $campaign_activity_id The unique ID used to identify the campaign activity (UUID).
	 * @var PHPFUI\ConstantContact\Definition\StatsEmailActivity $stats Key-value pairs of campaign activity statistics.
	 * @var string $last_refresh_time The time at which the campaign activity stats were last refreshed in ISO 8601 format (e.g. '2015-08-25T22:00:09.908Z').
	 */

class CampaignActivityStatsResultGenericStatsEmailActivity extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'campaign_id' => 'string',
		'campaign_activity_id' => 'string',
		'stats' => 'PHPFUI\\ConstantContact\\Definition\\StatsEmailActivity',
		'last_refresh_time' => 'string',

	];
	}