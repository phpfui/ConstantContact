<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var string $resend_subject The subject line for the resend email.
 * @var int $delay_days The number of days to wait before Constant Contact resends the email. Valid values include <code>1</code> to <code>10</code> days. This property is mutually exclusive with <code>delay_minutes</code>. This value is only returned in the response results if the resend activity was created with <code>delay_days</code> or the <code>delay_minutes</code> equal to an exact day value.
 * @var int $delay_minutes The number of minutes to wait before Constant Contact resends the email. There are 1,440 minutes in a day. Valid values includes a minimum of <code>720</code> (12 hours) and a maximum of <code>14,400</code> minutes (10 days). This property is mutually exclusive with <code>delay_days</code>.
 * @var DateTime $resend_date The system generated ISO-8601 format date and time that Constant Contact resent the email to non-openers.
 * @var string $resend_request_id For scheduled or sent resend to non-opener emails, this property is a unique identifier for the resend. For draft email campaign resend activities, the value of this property is <code>DRAFT</code>.
 */
class ResendToNonOpenersObject extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'resend_subject' => 'string',
		'delay_days' => 'int',
		'delay_minutes' => 'int',
		'resend_date' => 'DateTime',
		'resend_request_id' => 'string',

	];
	}
