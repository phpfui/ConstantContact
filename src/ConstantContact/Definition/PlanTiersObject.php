<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $plan_type The billing plan that is associated with a client's Constant Contact account. The billing plan determines which Constant Contact product features that the client account can access. If you are not on the latest billing plan, contact the Constant Contact Partner Team. However, older billing plans and <code>plan_type</code> enum values will continue to be supported. <ul>
 * <li><code>TRIAL</code>: Provides limited product features for a non-billed account and the account has an expiration date.</li>
 * <li><code>BRONZE</code>: Billable plan that provides basic email and marketing tools.</li>  
 * <li><code>SILVER</code>: Billable plan that provides all features available in the <code>BRONZE</code> plan, and adds some additional email campaign to features, such as contact segmentation and social media ads integration.</li>
 * <li><code>GOLD</code>: Billable plan that provides all available product features.</li> * </ul>
 * @property array<\PHPFUI\ConstantContact\Definition\TierObject> $current_tiers Lists the billing plan tiers that are currently associated with a client account.
 * @property string $billing_status The client's account billing status. When you first create a client account the <code>billing_status</code> defaults to <code>Trial</code>. Billing status values include:
 * <ul>
 * <li><code>Trial</code> - A non-paying trial client account (default value).</li>
 * <li><code>Open</code> - An active and paying client account.</li>
 * <li><code>Canceled</code> - A canceled client account.</li>
 * <li><code>Trial End</code> - The trial period has ended for this client account.</li>
 * </ul>
 * @property int $billing_day_of_month This property is required when an account is not set up to use single billing. For trial accounts, the value is initially set to <code>null</code>. The value can only be changed when changing the <code>plan_type</code> from a trial account to a different type of plan, otherwise the value you enter is ignored. You can choose to enter a specific day of month or except the default value, which is the day that the <code>plan_type</code> value changes from a trial account plan to a different plan. Valid <code>billing_day_of_month</code> values include <code>1</code> through and including <code>31</code>.
 */
class PlanTiersObject extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'plan_type' => 'string',
		'current_tiers' => 'array<\PHPFUI\ConstantContact\Definition\TierObject>',
		'billing_status' => 'string',
		'billing_day_of_month' => 'int',

	];
	}
