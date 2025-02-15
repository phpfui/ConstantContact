<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $sms_address The contact's SMS-capable phone number, excluding the country code.
 * @property string $dial_code The dial code the country uses. For example, use <code>1</code> for the United States dial code.
 * @property string $country_code The two-digit code that identifies the country.
 * @property array<\PHPFUI\ConstantContact\Definition\JmmlSmsChannelConsents> $sms_channel_consents The consents provided for the SMS Channel.
 */
class JmmlSmsChannel extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'sms_address' => 'string',
		'dial_code' => 'string',
		'country_code' => 'string',
		'sms_channel_consents' => 'array<\PHPFUI\ConstantContact\Definition\JmmlSmsChannelConsents>',

	];
	}
