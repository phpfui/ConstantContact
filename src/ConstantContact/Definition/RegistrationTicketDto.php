<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\DateTime $checked_in_time The event check in time date, in ISO format.
 * @property bool $editable Set to <code>true</code> to allow or <code>false</code> to not allow registrations to be modified.
 * @property string $order_ticket_key The system generated number used to identify a ticket order.
 * @property int $price The price for a ticket.
 * @property string $ticket_name The name used to identify the ticket.
 * @property array<\PHPFUI\ConstantContact\Definition\SimpleFieldDto> $fields
 */
class RegistrationTicketDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'checked_in_time' => '\PHPFUI\ConstantContact\DateTime',
		'editable' => 'bool',
		'order_ticket_key' => 'string',
		'price' => 'int',
		'ticket_name' => 'string',
		'fields' => 'array<\PHPFUI\ConstantContact\Definition\SimpleFieldDto>',

	];
	}
