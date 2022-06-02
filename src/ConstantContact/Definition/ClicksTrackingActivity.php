<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $contact_id The ID that uniquely identifies a contact.
 * @property \PHPFUI\ConstantContact\UUID $campaign_activity_id The ID that uniquely identifies the email campaign activity.
 * @property string $tracking_activity_type The type of report tracking activity that is associated with the specified <code>campaign_activity_id</code>.
 * @property string $email_address The email address used to send the email campaign activity to a contact.
 * @property string $first_name The first name of the contact.
 * @property string $last_name The last name of the contact.
 * @property string $device_type The type of device that the contact was using when they clicked the URL link for the email campaign activity.
 * @property string $url_id The ID used to uniquely identify the URL link.
 * @property string $link_url The text used for the URL link.
 * @property \PHPFUI\ConstantContact\DateTime $created_time The date and time that the contact clicked the specified URL link for the email campaign activity.
 * @property \PHPFUI\ConstantContact\Date $deleted_at If applicable, displays the date that the contact was deleted.
 */
class ClicksTrackingActivity extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_id' => '\PHPFUI\ConstantContact\UUID',
		'campaign_activity_id' => '\PHPFUI\ConstantContact\UUID',
		'tracking_activity_type' => 'string',
		'email_address' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'device_type' => ['computer', 'mobile', 'tablet', 'other'],
		'url_id' => 'string',
		'link_url' => 'string',
		'created_time' => '\PHPFUI\ConstantContact\DateTime',
		'deleted_at' => '\PHPFUI\ConstantContact\Date',

	];
	}
