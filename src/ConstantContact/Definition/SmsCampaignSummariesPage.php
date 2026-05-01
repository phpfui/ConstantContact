<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\BulkCampaignSummary> $bulk_sms_campaign_summaries Provides details about each SMS campaign, including the total unique counts for each tracked campaign activity.
 * @property \PHPFUI\ConstantContact\Definition\BulkSmsCampaignSummariesPercents $aggregate_percents Campaign activity aggregate percents, including <code>click</code>, <code> deliver</code>, <code> bounce</code>, and <code>unsubscribe</code>, for all SMS campaigns returned on a page of results.
 * @property \PHPFUI\ConstantContact\Definition\ReportingsmsLinks $_links HAL property that contains next link if applicable
 */
class SmsCampaignSummariesPage extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'bulk_sms_campaign_summaries' => 'array<\PHPFUI\ConstantContact\Definition\BulkCampaignSummary>',
		'aggregate_percents' => '\PHPFUI\ConstantContact\Definition\BulkSmsCampaignSummariesPercents',
		'_links' => '\PHPFUI\ConstantContact\Definition\ReportingsmsLinks',

	];
	}
