<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Partner\Accounts;

class Plan extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/partner/accounts/{encoded_account_id}/plan');
		}

	/**
	 * GET Billing Plan Details for a Client Account
	 *
	 * Use this GET method to return billing plan details for a client's Constant
	 * Contact account.
	 * Only technology partners can access partner endpoints and partner endpoints
	 * cannot be tested using the API reference tester.
	 * For more use case information, see [Get Billing Plan Details for a Client
	 * Account](https://v3.developer.constantcontact.com/api_guide/partners_plans_get.html)
	 * in the API guide.
	 *
	 * @param string $encoded_account_id Specify the client's unique `encoded_account_id`.
	 */
	public function get(string $encoded_account_id) : array
		{

		return $this->doGet(['encoded_account_id' => $encoded_account_id, ]);
		}

	/**
	 * PUT (update) Billing Plan Details for a Client Account
	 *
	 * Use this PUT method to update the type of billing plan to assign to
	 * the Constant Contact client account. The type of billing plan determines
	 * which Constant Contact product features that the client account can
	 * access. The billing plan type (`plan_type`) that you enter must already
	 * exist in the plan group. Attempting to change to a plan that is currently
	 * not available within your partner plan group results in a 400 error
	 * response code.
	 *
	 * When you create a new client account, the `plan_type` defaults to `TRIAL`
	 * and the `billing_day_of_month` defaults to `null`. The `billing_day_of_month`
	 * property is required if a client account is not set up to use single
	 * billing. You can change the day of month (`billing_day_of_month`) in
	 * which to bill a client account only when changing the `plan_type` value
	 * from `TRIAL` to a different `plan_type`, otherwise the `billing_day_of_month`
	 * value you enter is ignored. You can choose to enter a specific day of
	 * the month or accept the default value, which is the day on which the
	 * `plan_type` value changes from a `TRIAL` plan to a different `plan_type`.
	 * Changing the `plan_type` from `TRIAL` to another `plan_type` automatically
	 * changes the `billing_status` from `Trial` to `Open`.
	 *
	 *
	 * Only technology partners can access partner endpoints and partner endpoints
	 * cannot be tested using the API reference tester.
	 *
	 * For more use case information, see [PUT Billing Plan Details for a Client
	 * Account](https://v3.developer.constantcontact.com/api_guide/partners_plans_update.html)
	 * in the API guide.
	 *
	 * @param string $encoded_account_id Specify the client's unique `encoded_account_id`.
	 * @param \PHPFUI\ConstantContact\Definition\PlanInfo $body Update the billing plan (`plan_type`) for an existing Constant Contact client account. Options include:
	 * - `TRIAL`: A non-billed account with an expiration date that allows clients to try Constant Contact product features.
	 *
	 * - `GOOD`: A billed **Email** client account plan.
	 *
	 * - `BETTER`: A billed **Email Plus** client account plan.
	 *
	 * - `BEST`: A billed **Personal Marketer** client account plan.
	 *
	 * - `LITE`: A **Website Builder** client account plan.
	 *
	 *
	 * If updating from a `TRIAL` plan (`plan_type`) to another type of billing plan, you have the option to update the day of month (`billing_day_of_month`) in which to bill the client account. Valid values include `1` through to and including `31`. Any additional billing plan properties and values that you include in the request body are ignored.
	 */
	public function put(string $encoded_account_id, ?\PHPFUI\ConstantContact\Definition\PlanInfo $body = null) : array
		{

		return $this->doPut(['encoded_account_id' => $encoded_account_id, 'body' => $body->getData(), ]);
		}
	}
