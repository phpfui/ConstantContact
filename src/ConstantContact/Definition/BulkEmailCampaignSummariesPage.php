<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\BulkEmailCampaignSummary> $bulk_email_campaign_summaries Lists and provides details about each bulk email campaign activity including total unique counts for tracked activities.
 * @property \PHPFUI\ConstantContact\Definition\BulkEmailCampaignSummariesPercents $aggregate_percents Lists aggregate percents for  `click`, `open`, `did_not_open`, `bounce`, and  `unsubscribe` activities for all campaigns included on a page of results.
 * @property \PHPFUI\ConstantContact\Definition\Links2 $_links HAL property that contains next link if applicable
 */
class BulkEmailCampaignSummariesPage extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'bulk_email_campaign_summaries' => 'array<\PHPFUI\ConstantContact\Definition\BulkEmailCampaignSummary>',
		'aggregate_percents' => '\PHPFUI\ConstantContact\Definition\BulkEmailCampaignSummariesPercents',
		'_links' => '\PHPFUI\ConstantContact\Definition\Links2',

	];
	}
