<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\CampaignPerformanceStats> $open_rate Array of results containing open rates sorted by highest to lowest or by lowest to highest for requested account id
 * @property array<\PHPFUI\ConstantContact\Definition\CampaignPerformanceStats> $opens Array of results containing sorted unique opens count for each requested account id
 * @property array<\PHPFUI\ConstantContact\Definition\CampaignPerformanceStats> $click_rate Array of results containing click rates sorted by highest to lowest or by lowest to highest for requested account id
 * @property array<\PHPFUI\ConstantContact\Definition\CampaignPerformanceStats> $clicks Array of results containing sorted unique opens count for each requested account id
 */
class CampaignPerformanceStatsResult extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'open_rate' => 'array<\PHPFUI\ConstantContact\Definition\CampaignPerformanceStats>',
		'opens' => 'array<\PHPFUI\ConstantContact\Definition\CampaignPerformanceStats>',
		'click_rate' => 'array<\PHPFUI\ConstantContact\Definition\CampaignPerformanceStats>',
		'clicks' => 'array<\PHPFUI\ConstantContact\Definition\CampaignPerformanceStats>',

	];
	}
