<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Account\Summary;

class PhysicalAddress extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/account/summary/physical_address');
		}

	/**
	 * GET the Physical Address for the Account
	 *
	 * Use this method to get the address where the account's organization
	 * physically resides. The physical address is required to send emails
	 * and displays on the footer of every email that is sent from the account.
	 *
	 *
	 */
	public function get() : ?array
		{

		return $this->doGet([]);
		}

	public function getTyped() : ?\PHPFUI\ConstantContact\Definition\AccountPhysicalAddress
		{
		$data = $this->get();

		return $data ? new \PHPFUI\ConstantContact\Definition\AccountPhysicalAddress($data) : null;
		}


	/**
	 * POST the Physical Address for the Account
	 *
	 * Use this method to add the address where the account's organization
	 * physically resides. The physical address is required to send emails
	 * and displays on the footer of every email that is sent from the account.
	 * The country (<code>country_code</code>) where the account organization
	 * resides determines whether you use the <code>state_code</code> to specify
	 * United States (<code>US</code>) and Canada (<code>CA</code>) addresses,
	 * or use the <code>state_name</code> to specify all other countries.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\AccountPhysicalAddress $body Include all `AccountPhysicalAddress` properties required for the specified `country_code`. If a required property is not included or incorrectly formatted, a 400 error message is returned. If the address already exists, a 409 error message is returned.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\AccountPhysicalAddress $body) : ?array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}

	public function postTyped(\PHPFUI\ConstantContact\Definition\AccountPhysicalAddress $body) : ?\PHPFUI\ConstantContact\Definition\AccountPhysicalAddress
		{
		$data = $this->post($body);

		return $data ? new \PHPFUI\ConstantContact\Definition\AccountPhysicalAddress($data) : null;
		}


	/**
	 * PUT (update) the Physical Address for an Account
	 *
	 * Use this method to update the organization's physical address for the
	 * Constant Contact user account. The physical address is required to send
	 * emails and displays on the footer of every email that is sent from the
	 * account. To get the current physical address, make a GET call to `/account/summary/physical_address`.
	 * The country (<code>country_code</code>) where the account organization
	 * resides determines whether you use the <code>state_code</code> to specify
	 * United States (<code>US</code>) and Canada (<code>CA</code>) addresses,
	 * or use the <code>state_name</code> to specify all other countries. For
	 * more details, see [Put (update) the Physical Address for the Account](https://v3.developer.constantcontact.com/api_guide/account_address_put.html).
	 * You must have the role of Account Owner assigned to update account level
	 * details.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\AccountPhysicalAddress $body Include all `AccountPhysicalAddress` properties required for the specified `country_code` and then update only those properties that you want to change. Excluding a non-read only field from the request body removes it from the physical address.
	 */
	public function put(\PHPFUI\ConstantContact\Definition\AccountPhysicalAddress $body) : ?array
		{

		return $this->doPut(['body' => $body->getData(), ]);
		}

	public function putTyped(\PHPFUI\ConstantContact\Definition\AccountPhysicalAddress $body) : ?\PHPFUI\ConstantContact\Definition\AccountPhysicalAddress
		{
		$data = $this->put($body);

		return $data ? new \PHPFUI\ConstantContact\Definition\AccountPhysicalAddress($data) : null;
		}

	}
