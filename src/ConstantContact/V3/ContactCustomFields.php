<?php

// Generated file. Do not edit by hand. Use update.php in project root.

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
	 * Get all custom fields defined in the user's account.
	 * <div class="Msg"><p class="note-text">This method does not currently
	 * support filtering results using the custom field update date.</p></div>
	 *
	 *
	 * @param int $limit Specifies the number of results displayed per page of output, from 1 - 100, default = 50.
	 */
	public function get(?int $limit = null) : ?array
		{

		return $this->doGet(['limit' => $limit, ]);
		}

	public function getTyped(?int $limit = null) : ?\PHPFUI\ConstantContact\Definition\CustomFields
		{
		$data = $this->get($limit);

		return $data ? new \PHPFUI\ConstantContact\Definition\CustomFields($data) : null;
		}


	/**
	 * POST (create) a custom_field
	 *
	 * Custom fields are extra data fields you create to store additional information
	 * about your contacts, such as preferences, membership levels, and interests.
	 * Use custom fields to organize contacts, send personalized email campaigns,
	 * and to identify a targeted audience for a specific campaign. Custom
	 * fields types include text, number, date, drop-down lists, radio buttons,
	 * and checkboxes. A user can configure up to 100 `custom_fields` in their
	 * account.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\CustomFieldRequest $body The JSON payload required to create a new custom field.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\CustomFieldRequest $body) : ?array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}

	public function postTyped(\PHPFUI\ConstantContact\Definition\CustomFieldRequest $body) : ?\PHPFUI\ConstantContact\Definition\CustomField
		{
		$data = $this->post($body);

		return $data ? new \PHPFUI\ConstantContact\Definition\CustomField($data) : null;
		}

	}
