<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var \PHPFUI\ConstantContact\UUID $contact_id The ID that uniquely identifies a contact.
	 * @var \PHPFUI\ConstantContact\UUID $campaign_activity_id The ID that uniquely identifies an email campaign activity.
	 * @var string $tracking_activity_type The type of tracking activity that is associated with this <code>campaign_activity_id</code> and used for reporting purposes.
	 * @var string $email_address The email address used to send the email campaign activity to a contact.
	 * @var string $first_name The first name of the contact.
	 * @var string $last_name The last name of the contact.
	 * @var DateTime $created_time The date and time that you sent the email campaign to the contact.
	 * @var \PHPFUI\ConstantContact\Date $deleted_at If applicable, displays the date that the contact was deleted.
	 */

class SendsTrackingActivity extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'contact_id' => '\PHPFUI\ConstantContact\UUID',
		'campaign_activity_id' => '\PHPFUI\ConstantContact\UUID',
		'tracking_activity_type' => 'string',
		'email_address' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'created_time' => 'DateTime',
		'deleted_at' => '\PHPFUI\ConstantContact\Date',

	];
	}