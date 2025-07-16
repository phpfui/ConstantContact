<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $currency_type Identifies the currency used for payment.
 * @property string $payment_instructions Payment instructions for each payment option.
 * @property array $payment_option_configurations Payment options.
 * @property array<\PHPFUI\ConstantContact\Definition\AdditionalPaymentOptionConfigurationDto> $additional_payment_option_configurations Additional configurations for payment options.
 * @property \PHPFUI\ConstantContact\Definition\EventPlatformFeeConfigurationBaseDto $platform_fee_configuration
 * @property string $platform_fee_scope_type The scope type for platform fees.
 */
class PaymentConfigurationDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'currency_type' => 'string',
		'payment_instructions' => 'string',
		'payment_option_configurations' => 'array',
		'additional_payment_option_configurations' => 'array<\PHPFUI\ConstantContact\Definition\AdditionalPaymentOptionConfigurationDto>',
		'platform_fee_configuration' => '\PHPFUI\ConstantContact\Definition\EventPlatformFeeConfigurationBaseDto',
		'platform_fee_scope_type' => 'string',

	];
	}
