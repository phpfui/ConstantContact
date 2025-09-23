<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $create_time Create time of the event.
 * @property string $last_update_time Last modification time of the event.
 * @property string $payment_option The type of payment option.
 * @property bool $visible Specifies if the payment option is visible to users.
 * @property bool $selected Specifies if the payment option is selected by default.
 * @property bool $additional_accounts Specifies if additional accounts are available.
 * @property array<\PHPFUI\ConstantContact\Definition\Message> $error_messages List of error messages associated with the payment option.
 * @property string $email_address
 * @property bool $venmo_enabled
 * @property bool $pay_later_enabled
 */
class PayPalPaymentConfigurationDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'create_time' => 'string',
		'last_update_time' => 'string',
		'payment_option' => 'string',
		'visible' => 'bool',
		'selected' => 'bool',
		'additional_accounts' => 'bool',
		'error_messages' => 'array<\PHPFUI\ConstantContact\Definition\Message>',
		'email_address' => 'string',
		'venmo_enabled' => 'bool',
		'pay_later_enabled' => 'bool',

	];
	}
