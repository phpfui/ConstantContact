<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property bool $event_requires_payments Specifies if the event is configured to require payment.
 * @property bool $item_configured Specifies if items exist for the event.
 * @property bool $online_payment_configured Specifies if online payment is configured for the event.
 * @property bool $payment_configured Specifies if payment is configured for the event.
 * @property bool $promo_code_configured Specifies if promo code is configured for the event.
 * @property bool $ticket_configured Specifies if ticketing is configured for the event
 */
class EventSettingsDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'event_requires_payments' => 'bool',
		'item_configured' => 'bool',
		'online_payment_configured' => 'bool',
		'payment_configured' => 'bool',
		'promo_code_configured' => 'bool',
		'ticket_configured' => 'bool',

	];
	}
