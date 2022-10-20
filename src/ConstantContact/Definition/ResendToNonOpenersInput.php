<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $resend_subject The subject line used when resending the email campaign activity.
 * @property int $delay_days The number of days to wait before Constant Contact resends the email. Valid values include <code>1</code> to <code>10</code> days. This property is mutually exclusive with <code>delay_minutes</code>. This value is only returned in the response results if the resend activity was created with <code>delay_days</code> or the <code>delay_minutes</code> equal to an exact day value.
 * @property int $delay_minutes The number of minutes to wait before Constant Contact resends the email campaign activity. There are 1,440 minutes in a day. Valid values includes a minimum of <code>720</code> (12 hours) and a maximum of <code>14,400</code> minutes (10 days). This property is mutually exclusive with <code>delay_days</code>
 */
class ResendToNonOpenersInput extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'resend_subject' => 'string',
		'delay_days' => 'int',
		'delay_minutes' => 'int',

	];
	}
