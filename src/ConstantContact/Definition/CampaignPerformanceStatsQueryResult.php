<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\StatsError> $errors Array of errors indicating any partial failures in the query
 * @property \PHPFUI\ConstantContact\Definition\CampaignPerformanceStatsResult $top List of top performed campaigns
 * @property \PHPFUI\ConstantContact\Definition\CampaignPerformanceStatsResult $bottom List of low performed campaigns
 */
class CampaignPerformanceStatsQueryResult extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'errors' => 'array<\PHPFUI\ConstantContact\Definition\StatsError>',
		'top' => '\PHPFUI\ConstantContact\Definition\CampaignPerformanceStatsResult',
		'bottom' => '\PHPFUI\ConstantContact\Definition\CampaignPerformanceStatsResult',

	];
	}
