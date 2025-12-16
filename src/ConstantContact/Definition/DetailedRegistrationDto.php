<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $registration_id The unique ID used to identify an event registration.
 * @property string $contact_id The unique ID used to identify a contact.
 * @property int $checkedIn_tickets The total number of tickets assigned to a given <code>registration_id</code>.
 * @property string $checkin_status Provides the status of eligible checkin tickets.
 * @property int $eligible_checkin_tickets The total number of tickets eligible for checkin.
 * @property \PHPFUI\ConstantContact\DateTime $registration_date The event registration date, in ISO format.
 * @property string $registration_status Provides the current registration status; <code>REGISTERED</code>, <code>PENDING</code>, <code>CANCELED</code>, <code>EXPIRED</code>, <code>IN_PROGRESS</code>, <code>FAILED</code>.
 * @property bool $display_physical_tickets Determines if the physical tickets should display or not display.
 * @property array<\PHPFUI\ConstantContact\Definition\SimpleFieldDto> $contact
 * @property array<\PHPFUI\ConstantContact\Definition\RegistrationTicketDto> $tickets
 * @property \PHPFUI\ConstantContact\Definition\OrderDetailsDto $order_summary
 */
class DetailedRegistrationDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'registration_id' => 'string',
		'contact_id' => 'string',
		'checkedIn_tickets' => 'int',
		'checkin_status' => 'string',
		'eligible_checkin_tickets' => 'int',
		'registration_date' => '\PHPFUI\ConstantContact\DateTime',
		'registration_status' => 'string',
		'display_physical_tickets' => 'bool',
		'contact' => 'array<\PHPFUI\ConstantContact\Definition\SimpleFieldDto>',
		'tickets' => 'array<\PHPFUI\ConstantContact\Definition\RegistrationTicketDto>',
		'order_summary' => '\PHPFUI\ConstantContact\Definition\OrderDetailsDto',

	];
	}
