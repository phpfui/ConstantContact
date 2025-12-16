<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\LineItemDetailsDto> $details
 * @property string $number The system assigned string value used to identify the event order.
 * @property string $payment_method The payment method used when the order was placed. Acceptable payment methods include; `STRIPE` and `PAYPAL`.
 * @property string $payment_status The event registration payment status. Acceptable values include; <code>PENDING</code>, <code>PAID</code>, <code>REFUNDED</code>, <code>CANCELLED</code>, <code>FAILED</code>, <code>CHARGED_BACK</code>, <code>PENDING</code>, <code>UNKNOWN</code.
 * @property string $payment_time Displays the date and time the payment was made, in ISO format.
 * @property string $payment_transaction_id The unique ID used to identify a payment transaction.
 * @property string $tickets_link The URL used to access purchased tickets.
 * @property string $tickets_text Text that describes the event and ticket information.
 * @property string $title The title for the order.
 */
class OrderDetailsDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'details' => 'array<\PHPFUI\ConstantContact\Definition\LineItemDetailsDto>',
		'number' => 'string',
		'payment_method' => 'string',
		'payment_status' => 'string',
		'payment_time' => 'string',
		'payment_transaction_id' => 'string',
		'tickets_link' => 'string',
		'tickets_text' => 'string',
		'title' => 'string',

	];
	}
