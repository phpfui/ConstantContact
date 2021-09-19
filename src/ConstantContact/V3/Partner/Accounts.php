<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Partner;

class Accounts extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/partner/accounts');
		}


	/**
	 * GET Partner Client Accounts
	 *
	 * Get all Constant Contact client accounts managed under your technology
	 * partner account. Use the `limit` query parameter to set the number of
	 * accounts to return on each results page.
	 * Only technology partners can access partner endpoints and partner endpoints
	 * cannot be tested using the API reference tester.
	 * For more use case information, see [Get all Partner Client Accounts](/api_guide/partners_accts_get.html)
	 * in the API guide.
	 *
	 * @param string $offset Depending on the `limit` you specify, the system determines the `offset` parameter to use (number of records to skip) and includes it in the link used to get the next page of results
	 * @param string $limit The number of client accounts to return on each page of results. The default value is `50`. Entering a `limit` value less than the minimum (`10`) or greater than the maximum (`50`) is ignored and the system uses the default values. Depending on the `limit` you specify, the system determines the `offset` parameter to use (number of records to skip) and includes it in the link used to get the next page of results.
	 */
	public function get(?string $offset = null, ?string $limit = null) : array
		{
		return $this->doGet(['offset' => $offset, 'limit' => $limit, ]);
		}

	/**
	 * POST (create) a Partner Client Account
	 *
	 * Use this POST method to create a new Constant Contact client account
	 * under your partner account, set up the billing plan for the account,
	 * and to add the new client to the default contact list.
	 * 
	 * Newly created accounts are free trials which give the user up to 60
	 * days to try Constant Contact before buying. Trial accounts have limits
	 * depending on the services that are included.
	 * 
	 * If a field validation error occurs, a 400 response message is returned.
	 *
	 * 
	 * If provisioning does not complete successfully due to unavailable dependencies,
	 * such as database or dependent services, a 503 response message is returned.
	 * By default, the client account provision data is stored and processed
	 * when provisioning becomes available.
	 * 
	 * Some client account features will be supported in future releases, such
	 * as Single Sign On (SSO).
	 * 
	 * For more use case information, see [Create a new Partner Client Account](/api_guide/partners_accts_create.html)
	 * in the API guide.
	 *
	 * @param PHPFUI\ConstantContact\Definition\Provision $provision Create a new Constant Contact client account under your partner account. All required properties must be included in the JSON payload request.
	 */
	public function post(PHPFUI\ConstantContact\Definition\Provision $provision) : array
		{
		return $this->doPost(['provision' => $provision, ]);
		}
	}