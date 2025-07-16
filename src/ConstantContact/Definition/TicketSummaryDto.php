<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $name The name to associate with the ticket.
 * @property string $ticket_id The unique identifier for the ticket.
 * @property string $ticket_type The type of ticket.
 * @property bool $associated Specifies if the ticket is associated with the promo code.
 * @property bool $display_ticket_on_promo_redemption Specifies if the ticket on the promo code redemption displays.
 * @property bool $hidden_flag Specifies if the ticket is hidden.
 */
class TicketSummaryDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'name' => 'string',
		'ticket_id' => 'string',
		'ticket_type' => 'string',
		'associated' => 'bool',
		'display_ticket_on_promo_redemption' => 'bool',
		'hidden_flag' => 'bool',

	];
	}
