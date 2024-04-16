<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $campaign_id The ID that uniquely identifies the campaign.
 * @property string $campaign_name The name to associate with this campaign.
 * @property \PHPFUI\ConstantContact\DateTime $last_sent_date The date that the campaign was last sent.
 * @property \PHPFUI\ConstantContact\Definition\UniqueSmsCounts $unique_counts Aggregate counts for email tracking metrics unique across contacts and channels
 * @property string $campaign_type The campaign type.
 */
class BulkCampaignSummary extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'campaign_id' => '\PHPFUI\ConstantContact\UUID',
		'campaign_name' => 'string',
		'last_sent_date' => '\PHPFUI\ConstantContact\DateTime',
		'unique_counts' => '\PHPFUI\ConstantContact\Definition\UniqueSmsCounts',
		'campaign_type' => 'string',

	];
	}
