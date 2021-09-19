<?php

namespace PHPFUI\ConstantContact\Definition;

class BulkEmailCampaignSummary extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $campaign_id The ID that uniquely identifies an email campaign.
	 * @var string $campaign_type Identifies the email campaign type.
	 * @var DateTime $last_sent_date The date and time that the email campaign was last sent.
	 * @var PHPFUI\ConstantContact\Definition\UniqueEmailCounts $unique_counts The total number of times each unique contact interacted with a tracked email campaign activity.
	 */

	protected static array $fields = [
		'campaign_id' => 'string',
		'campaign_type' => 'string',
		'last_sent_date' => 'DateTime',
		'unique_counts' => 'PHPFUI\\ConstantContact\\Definition\\UniqueEmailCounts',

	];
	}