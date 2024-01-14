<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $state The code representing the consent state, including <code>E</code> for optin and <code>O</code> for Optin.
 * @property string $source The code representing the consent source type, including <code>A</code> for Account, <code>C</code> for Contact, and <code>S</code>' for System.
 * @property string $consent_type The type of SMS consent used.
 * @property \PHPFUI\ConstantContact\DateTime $consent_action_time The date and time that SMS engagement data was last updated, in ISO-8601 format. System generated.
 * @property string $consent_action_type The type of consent action provided.
 * @property string $consent_medium_type The code representing the medium used to provide consent. Medium types include mobile device (<code>MD</code>). lead generation form(<code>LF</code>), deactivation by carrier(<code>CD</code>), import_file:(<code>FI</code>), and system (<code>SY</code>).
 * @property string $source_consent_timestamp The time that SMS consent was last updated.
 * @property string $source_ip If applicable, the IP address from which the consent came.
 * @property string $source_sms_number If applicable, the SMS consent number associated with the source.
 * @property int $advertised_frequency If applicable, the advertising numeric component used to advertise to the contact.. For example, if <code>advertised_frequency</code> is set to <code> 2</code> , and  <code>advertised_interval</code> is set to <code>M</code>, the contact receives advertisements twice a month.
 * @property string $advertised_interval If applicable, the interval component used to advertise to the contact. For example, if <code>advertised_frequency</code> is set to <code> 2</code> , and  <code>advertised_interval</code> is set to <code>M</code>, the contact receives advertisements twice a month.
 */
class HistoryDetails extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'state' => ['E', 'O'],
		'source' => ['A', 'C', 'S'],
		'consent_type' => ['promotional_sms', 'transactional_sms'],
		'consent_action_time' => '\PHPFUI\ConstantContact\DateTime',
		'consent_action_type' => ['opt_out', 're_opt_in', 'delete', 'confirmed_opt_in', 'deactivate', 'suspend', 'resubscribe'],
		'consent_medium_type' => ['MD', 'LF', 'CD', 'FI', 'SY'],
		'source_consent_timestamp' => 'string',
		'source_ip' => 'string',
		'source_sms_number' => 'string',
		'advertised_frequency' => 'int',
		'advertised_interval' => ['M', 'D', 'W'],

	];
	}
