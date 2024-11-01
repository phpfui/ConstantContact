<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $resend_subject The subject line used when resending the email campaign activity.
 * @property int $delay_days The number of days to wait before Constant Contact resends the email. Valid values include <code>1</code> to <code>10</code> days. This value is only returned in the response results if the resend activity was created with <code>delay_days</code> or the <code>delay_minutes</code> equal to an exact day value.
 * @property int $delay_minutes The number of minutes to wait before Constant Contact resends the email. There are 1,440 minutes in a day. Valid values includes a minimum of <code>720</code> (12 hours) and a maximum of <code>14,400</code> minutes (10 days). This property is mutually exclusive with <code>delay_days</code>.
 * @property \PHPFUI\ConstantContact\DateTime $resend_date The system generated date and time (in ISO-8601 format) that the email campaign activity was resent to non-openers (only included in the response results for sent resend activities).
 * @property string $resend_request_id For scheduled or sent resend to non-opener emails, the system generates an ID that identifies the resend to non-openers activity. For draft email campaign resend activities, the system returns <code>DRAFT</code>.
 * @property string $resend_status The status of the resend to non-openers campaign activity. The <code>resend_status</code> is only returned in the response results if the campaign activity is either scheduled to be sent or was already sent.
 */
class ResendToNonOpeners extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'resend_subject' => 'string',
		'delay_days' => 'int',
		'delay_minutes' => 'int',
		'resend_date' => '\PHPFUI\ConstantContact\DateTime',
		'resend_request_id' => 'string',
		'resend_status' => 'string',

	];
	}
