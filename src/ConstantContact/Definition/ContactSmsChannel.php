<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $full_sms_address The SMS-capable phone number for the Contact, including the dial code
 * @property array<\PHPFUI\ConstantContact\Definition\ContactSmsChannelConsents> $sms_channel_consents The consents for the SMS Channel.
 */
class ContactSmsChannel extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'full_sms_address' => 'string',
		'sms_channel_consents' => 'array<\PHPFUI\ConstantContact\Definition\ContactSmsChannelConsents>',

	];
	}
