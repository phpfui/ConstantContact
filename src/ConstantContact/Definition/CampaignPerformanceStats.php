<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $campaign_id The campaign UUID
 * @property string $campaign_name The campaign name
 * @property string $last_send_date The last sent date-time of the campaign in ISO 8601 format (e.g. '2019-11-26T10:30:00.000Z')
 * @property int $open_rate Total email opens divided by (total sends - total bounces)
 * @property int $open_rate_precision_one Total email opens divided by (total sends - total bounces) with one decimal precision
 * @property int $opens Total unique email opens count
 * @property int $click_rate Total email clicks divided by (total sends - total bounces)
 * @property int $click_rate_precision_one Total clicks opens divided by (total sends - total bounces) with one decimal precision
 * @property int $clicks Total unique email clicks count
 */
class CampaignPerformanceStats extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'campaign_id' => 'string',
		'campaign_name' => 'string',
		'last_send_date' => 'string',
		'open_rate' => 'int',
		'open_rate_precision_one' => 'int',
		'opens' => 'int',
		'click_rate' => 'int',
		'click_rate_precision_one' => 'int',
		'clicks' => 'int',

	];
	}
