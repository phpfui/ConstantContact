<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var PHPFUI\ConstantContact\UUID $contact_id The contact id.
	 * @var PHPFUI\ConstantContact\UUID $campaign_activity_id The unique id of the activity for an e-mail campaign.
	 * @var DateTime $created_time The time the tracking activity occurred
	 * @var string $tracking_activity_type The type of the tracking activity (send, open, click, bounce, opt-out or forward to a friend)
	 */

class ContactTrackingActivity extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'contact_id' => 'PHPFUI\ConstantContact\UUID',
		'campaign_activity_id' => 'PHPFUI\ConstantContact\UUID',
		'created_time' => 'DateTime',
		'tracking_activity_type' => 'string',

	];
	}