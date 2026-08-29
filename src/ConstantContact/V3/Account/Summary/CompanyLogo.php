<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Account\Summary;

class CompanyLogo extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/account/summary/company_logo');
		}

	/**
	 * GET the Company Logo for the Account
	 *
	 * Use this method to get the company logo associated with a Constant Contact
	 * account. A company logo can reference either an image hosted in your
	 * account's MyLibrary (`internal_id`) or an image hosted externally (`external_url`).
	 *
	 *
	 */
	public function get() : ?array
		{

		return $this->doGet([]);
		}

	public function getTyped() : ?\PHPFUI\ConstantContact\Definition\CompanyLogo
		{
		$data = $this->get();

		return $data ? new \PHPFUI\ConstantContact\Definition\CompanyLogo($data) : null;
		}

	/**
	 * PUT (update) the Company Logo for the Account
	 *
	 * Use this method to set or replace the company logo for a Constant Contact
	 * account. Specify either `internal_id` (an image already hosted in your
	 * account's MyLibrary, e.g. `ACCOUNT.IMAGE.5`) or `external_url` (an image
	 * hosted on an external website).
	 *
	 * @param \PHPFUI\ConstantContact\Definition\CompanyLogo $body Specify the company logo by including either `internal_id` or `external_url`.
	 */
	public function put(\PHPFUI\ConstantContact\Definition\CompanyLogo $body) : ?array
		{

		return $this->doPut(['body' => $body->getData(), ]);
		}

	public function putTyped(\PHPFUI\ConstantContact\Definition\CompanyLogo $body) : ?\PHPFUI\ConstantContact\Definition\CompanyLogo
		{
		$data = $this->put($body);

		return $data ? new \PHPFUI\ConstantContact\Definition\CompanyLogo($data) : null;
		}
	}
