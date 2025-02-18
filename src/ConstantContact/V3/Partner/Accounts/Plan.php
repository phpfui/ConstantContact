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
	 * If you are not on the latest billing plan, contact the Constant Contact
	 * Partner Team. However, older billing plans and `plan_type` enum values
	 * will continue to be supported. Only technology partners can access partner
	 * endpoints and partner endpoints cannot be tested using the API reference
	 * tester.
	 * For more use case information, see [Get Billing Plan Details for a Client
	 * Account](https://v3.developer.constantcontact.com/api_guide/partners_plans_get.html)
	 * in the API guide.
	 *
	 * @param string $encoded_account_id Specify the client's unique `encoded_account_id`.
	 */
	public function get(string $encoded_account_id) : ?array
		{

		return $this->doGet(['encoded_account_id' => $encoded_account_id, ]);
		}

	public function getTyped(string $encoded_account_id) : ?\PHPFUI\ConstantContact\Definition\PlanTiersObject
		{
		$data = $this->get($encoded_account_id);

		return $data ? new \PHPFUI\ConstantContact\Definition\PlanTiersObject($data) : null;
		}


	/**
	 * PUT (update) Billing Plan Details for a Client Account
	 *
	 * Use this PUT method to update the type of billing plan to assign to
	 * the Constant Contact client account. The type of billing plan determines
	 * which Constant Contact product features that the client account can
	 * access. The billing plan that you specify in the request body (`plan_type`)
	 * must already exist in the plan group. Attempting to change to a plan
	 * that is currently not available within your partner plan group results
	 * in a 400 error response code.
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
	 * Only technology partners can access partner endpoints and partner endpoints
	 * cannot be tested using the API reference tester. If you are not on the
	 * latest billing plan, contact the Constant Contact Partner Team. However,
	 * older billing plans and `plan_type` enum values will continue to be
	 * supported.
	 *
	 * For more use case information, see [PUT Billing Plan Details for a Client
	 * Account](https://v3.developer.constantcontact.com/api_guide/partners_plans_update.html)
	 * in the API guide.
	 *
	 * @param string $encoded_account_id Specify the client's unique `encoded_account_id`.
	 * @param \PHPFUI\ConstantContact\Definition\PlanInfo $body `plan_type`: Updates the billing plan assigned to a client account to a different `plan_type`.   

`plan_group_id`: To update an older `plan_type` to a current a `plan_type`, use the `plan_group_id` parameter to specify the older billing `plan_type` number. 

- If the specified `plan_group_id` does not exist under the account's current plan group, the default partner plan group is used.
- If the specified `plan_group_id` exists but does not match the account's current plan group, an error is returned.
- If the `plan_group_id` parameter is not included in the request, the accounts current plan group is used.

`billing_day_of _month`:   Updates the day of month in which to bill the client account. This property is required if a client account is not set up to use single billing.      
	 */
	public function put(string $encoded_account_id, ?\PHPFUI\ConstantContact\Definition\PlanInfo $body = null) : ?array
		{

		return $this->doPut(['encoded_account_id' => $encoded_account_id, 'body' => $body->getData(), ]);
		}

	public function putTyped(string $encoded_account_id, ?\PHPFUI\ConstantContact\Definition\PlanInfo $body = null) : ?\PHPFUI\ConstantContact\Definition\PlanTiersObject
		{
		$data = $this->put($encoded_account_id, $body);

		return $data ? new \PHPFUI\ConstantContact\Definition\PlanTiersObject($data) : null;
		}

	}
