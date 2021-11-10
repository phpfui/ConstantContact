<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $plan_type The type of billing plan (<code>plan_type</code>) to associate with a client's Constant Contact account. The type of billing plan determines which Constant Contact product features that the client account can access. The billing plan type that you enter must already exist in your plan group or a 400 error message is returned. After changing the <code>plan_type</code> from <code>TRIAL</code> to any other billing plan type, you cannot change it back to <code>TRIAL</code>.
  <ul>
    <li><code>TRIAL</code>: A non-billed account with an expiration date that allows clients to try Constant Contact product features.</li>
    <li><code>GOOD</code>: A billed <b>Email</b> client account plan.</li>
    <li><code>BETTER</code>: A billed <b>Email Plus</b> client account plan.</li>
    <li><code>BEST</code>: A billed <b>Personal Marketer</b> client account plan.</li>
    <li><code>LITE</code>: A <b>Website Builder</b> client account plan.</li>
  </ul>
	 * @var int $billing_day_of_month This property is required if a client account is not set up to use single billing. You can choose to enter a specific day of the month or accept the default value, which is the day on which the <code>plan_type</code> value changes from a <code>TRIAL</code> plan to a different <code>plan_type</code>. For trial accounts, the value defaults to null. You can only change the <code>billing_day_of_month</code> when changing the <code>plan_type</code> value from <code>TRIAL</code> to a different <code>plan_type</code>, otherwise the value you enter is ignored.
	 */

class PlanInfo extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'plan_type' => ['TRIAL', 'GOOD', 'BETTER', 'BEST', 'LITE'],
		'billing_day_of_month' => 'int',

	];
	}