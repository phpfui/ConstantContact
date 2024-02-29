<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $sms_channel_id The unique ID that identifies an SMS channel.
 * @property string $sms_address The phone number of the SMS-capable phone, which does not include the country code.
 * @property string $dial_code The dial code used for the SMS-capable phone. For example, the dial code for the United States is <code>1</code>.
 * @property string $country_code The two character ISO country code used for the SMS-capable phone. For example, the country code for the United States is <code>US</code>.
 * @property string $update_source Identifies who last updated SMS details for the contact. Valid values are Contact or Account
 * @property string $create_source Identifies who added SMS details for the contact. The value is set when you create SMS details for the contact. Valid values are <code>Contact</code> or <code>Account</code>.
 * @property array<\PHPFUI\ConstantContact\Definition\SmsChannelConsentDetails> $sms_channel_consents Identifies SMS channel consent details such as the current permission status for the SMS channel and opt-in date.
 */
class SmsChannel extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'sms_channel_id' => '\PHPFUI\ConstantContact\UUID',
		'sms_address' => 'string',
		'dial_code' => 'string',
		'country_code' => 'string',
		'update_source' => 'string',
		'create_source' => 'string',
		'sms_channel_consents' => 'array<\PHPFUI\ConstantContact\Definition\SmsChannelConsentDetails>',

	];
	}
