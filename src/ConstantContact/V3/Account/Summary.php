<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Account;

class Summary extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/account/summary');
		}


	/**
	 * GET a Summary of Account Details
	 *
	 * Get account related details for a Constant Contact user account. Use
	 * the `extra_fields` query parameter to include the `company_logo` and/or
	 * `physical_address` details in the response body. For more details, see
	 * [Get Account Summary Details](/api_guide/account_details_get.html).
	 *
	 *
	 * @param string $extra_fields Use the `extra_fields` query parameter to include the `physical_address` and/or `company_logo` details in the response body. Use a comma separated list to include both (physical_address, company logo).
	 */
	public function get(?string $extra_fields = null) : array
		{
		if (null !== $extra_fields)
			{
			$parts = explode(',', $extra_fields);
			$validValues = ['physical_address' , 'company_logo'];
			foreach ($parts as $part)
				{
				if (! in_array(trim($part), $validValues))
					{
					throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter extra_fields containing value '{$part}' is not one of (" . implode(', ', $validValues) . ') in ' . __METHOD__);
					}
				}
			}
		return $this->doGet(['extra_fields' => $extra_fields, ]);
		}

	/**
	 * PUT (update) Account Details
	 *
	 * Use this method to update account details for a Constant Contact account,
	 * such as the email address or phone number. This PUT method provides
	 * a partial update where only valid properties that you include in the
	 * request body are updated and excluded properties are not overwritten.
	 * For more details, see [Put (update) Account Summary Details](/api_guide/account_details_put.html).
	 *
	 *
	 * @param PHPFUI\ConstantContact\Definition\CustomerPut $body In the request body, specify changes to account details by including and modifying all or select `CustomerPut` properties. Changes to read-only fields (`encoded_account_id`) are ignored.
	 */
	public function put(PHPFUI\ConstantContact\Definition\CustomerPut $body) : array
		{
		return $this->doPut(['body' => $body, ]);
		}
	}