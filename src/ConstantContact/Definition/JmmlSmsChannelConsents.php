<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $sms_consent_permission The current consent status of the SMS Channel.
 * @property string $consent_type The type of consent provided.
 * @property string $consent_medium_type A code representing where the consent was retrieved.
 * @property string $consent_medium_url The URL for which the consent was gathered, such as a landing page.
 * @property string $consent_medium_details Additional information for the consent
 * @property int $advertised_frequency The numeric component used to indicate how often to send advertising. For example, <code>1</code> indicates once. Use with <code>advertised_internal</code> property to indicate when on the calender to send it. For example, to send once (<code>1</code>) daily, weekly, or monthly.
 * @property string $advertised_interval The calender interval used to indicate when advertising is sent. For example <code>weekly</code>.
 */
class JmmlSmsChannelConsents extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'sms_consent_permission' => 'string',
		'consent_type' => 'string',
		'consent_medium_type' => 'string',
		'consent_medium_url' => 'string',
		'consent_medium_details' => 'string',
		'advertised_frequency' => 'int',
		'advertised_interval' => 'string',

	];
	}
