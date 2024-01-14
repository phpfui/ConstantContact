<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $suspend_plan_id Suspended plan group id.
 * @property int $suspend_plan_group_id The suspended plan group id.
 * @property \PHPFUI\ConstantContact\DateTime $suspend_date The date when the customer will start being suspended. If omitted defaults to the current date and time and suspends the account at the next billing cycle.
 * @property int $suspend_reason_id The reason the customer is suspended.
 * @property int $suspend_subreason_id The subreason why the customer is suspended.
 * @property string $suspend_comment Comment field for user suspension.
 * @property \PHPFUI\ConstantContact\DateTime $suspend_estimated_reactivation_date Estimated date when the customer will be reactivated.
 */
class AccountSuspension extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'suspend_plan_id' => 'int',
		'suspend_plan_group_id' => 'int',
		'suspend_date' => '\PHPFUI\ConstantContact\DateTime',
		'suspend_reason_id' => 'int',
		'suspend_subreason_id' => 'int',
		'suspend_comment' => 'string',
		'suspend_estimated_reactivation_date' => '\PHPFUI\ConstantContact\DateTime',

	];
	}
