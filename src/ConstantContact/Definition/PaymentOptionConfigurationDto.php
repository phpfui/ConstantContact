<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $create_time Create time of the event.
 * @property string $last_update_time Last modification time of the event.
 * @property \PHPFUI\ConstantContact\UUID $payment_account_id The unique identifier for the payment account.
 * @property string $payment_option The type of payment option.
 * @property bool $visible Specifies if the payment option is visible to users.
 * @property bool $selected Specifies if the payment option is selected by default.
 * @property bool $additional_accounts Specifies if additional accounts are available.
 * @property array<\PHPFUI\ConstantContact\Definition\Message> $error_messages List of error messages associated with the payment option.
 */
class PaymentOptionConfigurationDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'create_time' => 'string',
		'last_update_time' => 'string',
		'payment_account_id' => '\PHPFUI\ConstantContact\UUID',
		'payment_option' => 'string',
		'visible' => 'bool',
		'selected' => 'bool',
		'additional_accounts' => 'bool',
		'error_messages' => 'array<\PHPFUI\ConstantContact\Definition\Message>',

	];
	}
