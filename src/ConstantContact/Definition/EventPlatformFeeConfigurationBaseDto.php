<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $currency_type The type of currency to use for the event.
 * @property bool $exempt Specifies if the platform fee is exempt.
 * @property int $flat_rate_component Specifies the flat rate component of the platform fee.
 * @property string $last_refreshed_time The flat rate component of the platform fee
 * @property int $percent_component The percentage component of the platform fee.
 * @property array $platform_fee_instruction_keys List of instruction keys for platform fees.
 */
class EventPlatformFeeConfigurationBaseDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'currency_type' => 'string',
		'exempt' => 'bool',
		'flat_rate_component' => 'int',
		'last_refreshed_time' => 'string',
		'percent_component' => 'int',
		'platform_fee_instruction_keys' => 'array',

	];
	}
