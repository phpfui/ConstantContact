<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var string $campaign_id The ID that uniquely identifies the campaign (UUID).
 * @var \PHPFUI\ConstantContact\Definition\StatsEmail $stats Key-value pairs of campaign related statistics.
 * @var \PHPFUI\ConstantContact\Definition\PercentsEmail $percents Key-value pairs of campaign related percentages.
 * @var DateTime $last_refresh_time The date and time that the campaign stats were last refreshed.
 */
class CampaignStatsResultGenericStatsEmailPercentsEmail extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'campaign_id' => 'string',
		'stats' => '\PHPFUI\ConstantContact\Definition\StatsEmail',
		'percents' => '\PHPFUI\ConstantContact\Definition\PercentsEmail',
		'last_refresh_time' => 'DateTime',

	];
	}
