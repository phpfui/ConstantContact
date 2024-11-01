<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Partner\Accounts\AccountOperations;

class Sync extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/partner/accounts/{encoded_account_id}/account_operations/sync');
		}

	/**
	 * POST Send an API request on Behalf of a Client Account
	 *
	 * Use this API method to send an API request on behalf of a managed client
	 * account in your partnership.
	 *
	 * The request body properties you use in this partner API call determine
	 * the structure of the API request that Constant Contact sends on behalf
	 * of the managed client account. This includes the HTTP url, HTTP method
	 * type, request body, request url parameters, request query parameters,
	 * and headers that for the request. You can use this `/partner/accounts/{encoded_account_id}/account_operations/sync`
	 * API method to send a request using non-partner v3 API methods.
	 *
	 * @param string $encoded_account_id An encoded account id for a managed account in your partnership.
	 * @param \PHPFUI\ConstantContact\Definition\PartnerAccountOperationsRequest $body A JSON request body that contains the structure of the HTTP request you are instructing Constant Contact to send on behalf of specific managed account in your partnership.
	 */
	public function post(string $encoded_account_id, ?\PHPFUI\ConstantContact\Definition\PartnerAccountOperationsRequest $body = null) : ?array
		{

		return $this->doPost(['encoded_account_id' => $encoded_account_id, 'body' => $body->getData(), ]);
		}
	}
