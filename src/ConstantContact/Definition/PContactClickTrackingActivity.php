<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $contact_id The unique ID that identifies the contact.
 * @property \PHPFUI\ConstantContact\UUID $campaign_activity_id The unique ID that identifies of the campaign activity to use.
 * @property string $tracking_activity_type The tracked activity event type.
 * @property string $email_address The email address for the contact and tracking activity.
 * @property string $first_name The first name of the contact.
 * @property string $last_name The last name of the contact.
 * @property string $device_type The type of device that was used to click the link.
 * @property string $url_id The ID used to uniquely identify the link.
 * @property string $link_url The URL link text.
 * @property \PHPFUI\ConstantContact\DateTime $created_time The time the tracking activity occurred.
 * @property \PHPFUI\ConstantContact\Date $deleted_at The time the Contact was deleted
 * @property \PHPFUI\ConstantContact\Definition\TrackingActivitySmsChannelDTO $sms_channel Sms channel info for this contact
 */
class PContactClickTrackingActivity extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_id' => '\PHPFUI\ConstantContact\UUID',
		'campaign_activity_id' => '\PHPFUI\ConstantContact\UUID',
		'tracking_activity_type' => 'string',
		'email_address' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'device_type' => 'string',
		'url_id' => 'string',
		'link_url' => 'string',
		'created_time' => '\PHPFUI\ConstantContact\DateTime',
		'deleted_at' => '\PHPFUI\ConstantContact\Date',
		'sms_channel' => '\PHPFUI\ConstantContact\Definition\TrackingActivitySmsChannelDTO',

	];
	}
