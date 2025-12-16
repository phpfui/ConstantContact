<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $checkedIn_tickets The total number of tickets processed to check in for the event.
 * @property string $checkin_status The status of the check-in.
 * @property int $eligible_checkin_tickets The current checkin status.
 * @property string $email_address The email address associated with the registered event user.
 * @property string $first_name The first name of the person that registered for the event.
 * @property string $last_name The last name of the person that registered for the event.
 * @property bool $new_contact Set to <code>true</code> to indicate that the contact is new, otherwise set to <code>false</code>.
 * @property string $payment_status The current payment status for a registration.
 * @property string $registration_id The ID that uniquely identifies a registration.
 * @property string $registration_status The status of a registration. Acceptable values include: <code>PENDING</code>, <code>REGISTERED</code>, <code>CANCELED</code>, <code>EXPIRED</code>, <code>IN_PROGRESS</code>, <code>FAILED</code>.
 * @property \PHPFUI\ConstantContact\DateTime $registration_time The time of event registration, in ISO format.
 * @property int $tickets Total number of tickets associated with a registration.
 * @property int $total The total amount paid for a registration.
 * @property string $track_key System generated string used to track a registration.
 */
class RegistrantInformationLiteDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'checkedIn_tickets' => 'int',
		'checkin_status' => 'string',
		'eligible_checkin_tickets' => 'int',
		'email_address' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'new_contact' => 'bool',
		'payment_status' => 'string',
		'registration_id' => 'string',
		'registration_status' => 'string',
		'registration_time' => '\PHPFUI\ConstantContact\DateTime',
		'tickets' => 'int',
		'total' => 'int',
		'track_key' => 'string',

	];
	}
