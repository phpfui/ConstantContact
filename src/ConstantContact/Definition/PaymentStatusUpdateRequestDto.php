<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array $registration_ids List of registration IDs to update.
 * @property string $payment_status New payment status to set.
 */
class PaymentStatusUpdateRequestDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'registration_ids' => 'array',
		'payment_status' => 'string',

	];
	}
