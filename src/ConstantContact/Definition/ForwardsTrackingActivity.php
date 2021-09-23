<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var PHPFUI\ConstantContact\UUID $contact_id The ID that uniquely identifies a contact.
	 * @var PHPFUI\ConstantContact\UUID $campaign_activity_id The ID that uniquely identifies the email campaign activity.
	 * @var string $tracking_activity_type The type of report tracking activity that is associated with the specified <code>campaign_activity_id</code>.
	 * @var string $email_address The contact's email address.
	 * @var string $first_name The first name of the contact.
	 * @var string $last_name The last name of the contact.
	 * @var DateTime $created_time The time that the contact forwarded the email campaign activity.
	 * @var PHPFUI\ConstantContact\Date $deleted_at If applicable, displays the date that the contact was deleted.
	 */

class ForwardsTrackingActivity extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'contact_id' => 'PHPFUI\ConstantContact\UUID',
		'campaign_activity_id' => 'PHPFUI\ConstantContact\UUID',
		'tracking_activity_type' => 'string',
		'email_address' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'created_time' => 'DateTime',
		'deleted_at' => 'PHPFUI\ConstantContact\Date',

	];
	}