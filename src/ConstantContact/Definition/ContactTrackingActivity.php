<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $contact_id The contact ID.
 * @property \PHPFUI\ConstantContact\UUID $campaign_activity_id The unique ID of the activity for an e-mail campaign.
 * @property \PHPFUI\ConstantContact\DateTime $created_time The time the tracking activity occurred
 * @property string $tracking_activity_type The types of the tracking activities included in the request. For example, sends, opens, clicks, bounces, opt-outs, or forwards.
 * @property string $campaign_activity_name The campaign activity name.
 */
class ContactTrackingActivity extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_id' => '\PHPFUI\ConstantContact\UUID',
		'campaign_activity_id' => '\PHPFUI\ConstantContact\UUID',
		'created_time' => '\PHPFUI\ConstantContact\DateTime',
		'tracking_activity_type' => 'string',
		'campaign_activity_name' => 'string',

	];
	}
