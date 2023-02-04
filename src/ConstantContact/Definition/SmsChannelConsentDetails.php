<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $sms_consent_permission Identifies the current permission status for the SMS channel.
 * @property string $consent_type
 * @property \PHPFUI\ConstantContact\DateTime $opt_in_date Date and time, in ISO-8601 format, that the contact subscribed/opted-in to receiving SMS from the account. Displays only if the contact subscribes/opts-in. System generated.
 * @property \PHPFUI\ConstantContact\DateTime $opt_out_date Date and time, in ISO-8601 format, that the contact unsubscribed/opted-out of receiving SMS from the account. Displays only if the contact unsubscribed/opted-out. System generated.
 * @property string $advertised_frequency The numeric used to set how often to send SMS advertisements during a specified time interval (<code>advertised_interval</code>). For example, if the <code>advertised_frequency</code> is set to <code>2</code> and the  <code>advertised_interval</code> is set to <code>monthly</code>, the contact can receive up to two advertisements per month.
 * @property string $advertised_interval Identifies the unit of time used by Constant Contact to send SMS advertisements as a string enum. For example, if the <code>advertised_frequency</code> is set to <code>2</code> and the <code>advertised_interval</code> is set to <code>monthly</code>, the contact can receive up to two advertisements per month.
 * @property \PHPFUI\ConstantContact\DateTime $created_at Date and time that the SMS stats were created, in ISO-8601 format. System generated.
 * @property \PHPFUI\ConstantContact\DateTime $updated_at Date and time that the SMS stats were updated, in ISO-8601 format. System generated.
 */
class SmsChannelConsentDetails extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'sms_consent_permission' => ['pending_confirmation', 'opt_out', 'explicit'],
		'consent_type' => ['promotional_sms'],
		'opt_in_date' => '\PHPFUI\ConstantContact\DateTime',
		'opt_out_date' => '\PHPFUI\ConstantContact\DateTime',
		'advertised_frequency' => 'string',
		'advertised_interval' => ['daily', 'weekly', 'monthly'],
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',

	];
	}
