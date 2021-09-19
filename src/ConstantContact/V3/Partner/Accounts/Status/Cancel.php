<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Partner\Accounts\Status;

class Cancel extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/partner/accounts/{encoded_account_id}/status/cancel');
		}


	/**
	 * PUT Cancel the Billing Plan for a Client Account
	 *
	 * Use this PUT method to cancel a client's Constant Contact account. If
	 * the specified client account or technology partner account does not
	 * exist, the system returns a 404 error response. If the client account
	 * exists under a different technology partner account, the system returns
	 * a 400 error response.
	 * 
	 * 
	 * To get a list of all canceled client accounts (`"billing_status": "Canceled"`),
	 * make a `GET` call to the `/partner/accounts` endpoint.
	 * 
	 * Only technology partners can access partner endpoints and partner endpoints
	 * cannot be tested using the API reference tester.
	 * 
	 * For more use case information, see [Cancel the Billing Plan for a Client
	 * Account](/api_guide/partners_plans_cancel.html) in the API guide."
	 *
	 * @param string $encoded_account_id The system generated ID that uniquely identifies the client account.
	 * @param PHPFUI\ConstantContact\Definition\AccountCancellation $body By default, the current date and time is automatically used as the cancellation date. However, you can specify a future date and time to cancel the account (`effective_date`) in the request body in ISO format. You can also enter the client's cancellation reason (`reason_id`).
	 */
	public function put(string $encoded_account_id, ?PHPFUI\ConstantContact\Definition\AccountCancellation $body = null) : array
		{
		return $this->doPut(['encoded_account_id' => $encoded_account_id, 'body' => $body, ]);
		}
	}