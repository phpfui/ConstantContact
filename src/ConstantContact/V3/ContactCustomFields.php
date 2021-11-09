<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3;

class ContactCustomFields extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contact_custom_fields');
		}


	/**
	 * GET custom_fields Collection
	 *
	 * This GET request returns all `custom_fields` defined in the user's account.
	 *
	 * <div class="Msg"><p class="note-text">This method does not currently
	 * support filtering results using the custom field update date.</p></div>
	 *
	 * 
	 *
	 * @param int $limit Specifies the number of results displayed per page of output, from 1 - 100, default = 50.
	 */
	public function get(?int $limit = null) : array
		{
		return $this->doGet(['limit' => $limit, ]);
		}

	/**
	 * POST (create) a custom_field
	 *
	 * This POST request adds a new `custom_field` to the user's account. A
	 * user can configure up to 100 `custom_fields` in their account.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\CustomFieldInput $body The JSON payload required to create a new `custom_field`
	 */
	public function post(\PHPFUI\ConstantContact\Definition\CustomFieldInput $body) : array
		{
		return $this->doPost(['body' => $body->getData(), ]);
		}
	}