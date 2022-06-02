<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $contact_id The contact id.
 * @property \PHPFUI\ConstantContact\UUID $campaign_activity_id The unique id of the activity for an e-mail campaign.
 * @property \PHPFUI\ConstantContact\DateTime $created_time The time the tracking activity occurred
 * @property string $tracking_activity_type The type of the tracking activity (send, open, click, bounce, opt-out or forward to a friend)
 */
class ContactTrackingActivity extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_id' => '\PHPFUI\ConstantContact\UUID',
		'campaign_activity_id' => '\PHPFUI\ConstantContact\UUID',
		'created_time' => '\PHPFUI\ConstantContact\DateTime',
		'tracking_activity_type' => 'string',

	];
	}
