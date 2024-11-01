<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $contact_id The unique contact UUID.
 * @property string $sms_channel_id The unique SMS channel UUID.
 * @property string $sms_channel_history_id The unique SMS channel history UUID.
 * @property \PHPFUI\ConstantContact\DateTime $insert_time The date and time that the history record was created, in ISO-8601 format. System generated.
 * @property \PHPFUI\ConstantContact\Definition\HistoryDetails $history_details
 */
class SmsEngagementHistory extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_id' => 'string',
		'sms_channel_id' => 'string',
		'sms_channel_history_id' => 'string',
		'insert_time' => '\PHPFUI\ConstantContact\DateTime',
		'history_details' => '\PHPFUI\ConstantContact\Definition\HistoryDetails',

	];
	}
