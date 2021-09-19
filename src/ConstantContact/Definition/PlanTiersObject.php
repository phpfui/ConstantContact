<?php

namespace PHPFUI\ConstantContact\Definition;

class PlanTiersObject extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $plan_type The billing plan that is associated with a client's Constant Contact account. The billing plan determines which Constant Contact product features that the client account can access. <ul>
  <li><code>TRIAL</code>: A non-billed account with an expiration date that allows clients to try limited Constant Contact product features.</li>
  <li><code>GOOD</code>: A billed <b>Email</b> client account plan.</li>
  <li><code>BETTER</code>: A billed <b>Email Plus</b> client account plan.</li>
  <li><code>BEST</code>: A billed <b>Personal Marketer</b> client account plan.</li>
  <li><code>LITE</code>: A <b>Website Builder</b> client account plan.</li>
</ul>
	 * @var array $current_tiers Lists the billing plan tiers that are currently associated with a client account.
	 * @var string $billing_status The client's account billing status. When you first create a client account the <code>billing_status</code> defaults to <code>Trial</code>. Billing status values include:
  <ul>
    <li><code>Trial</code> - A non-paying trial client account (default value).</li>
    <li><code>Open</code> - An active and paying client account.</li>
    <li><code>Canceled</code> - A canceled client account.</li>
    <li><code>Trial End</code> - The trial period has ended for this client account.</li>
  </ul>
	 * @var int $billing_day_of_month This property is required when an account is not set up to use single billing. For trial accounts, the value is intially set to <code>null</code>. The value can only be changed when changing the <code>plan_type</code> from a trial account to a different type of plan, otherwise the value you enter is ignored. You can choose to enter a specific day of month or except the default value, which is the day that the <code>plan_type</code> value changes from a trial account plan to a different plan. Valid <code>billing_day_of_month</code> values include <code>1</code> through and including <code>31</code>.
	 */

	protected static array $fields = [
		'plan_type' => ['TRIAL', 'GOOD', 'BETTER', 'BEST', 'LITE'],
		'current_tiers' => 'array',
		'billing_status' => ['Trial', 'Open', 'Canceled', 'Trial End'],
		'billing_day_of_month' => 'int',

	];
	}