<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3;

class ContactCustomField extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contact_custom_fields/{custom_field_id}');
		}

	/**
	 * DELETE a custom_field
	 *
	 * Delete a custom field from the user's account.
	 *
	 * @param string $custom_field_id The ID that uniquely identifies the custom field to delete.
	 */
	public function delete(string $custom_field_id) : ?array
		{

		return $this->doDelete(['custom_field_id' => $custom_field_id, ]);
		}

	/**
	 * GET a custom_field
	 *
	 * Get details for a specified custom field.
	 *
	 * @param string $custom_field_id The ID that uniquely identifies the custom field.
	 */
	public function get(string $custom_field_id) : ?array
		{

		return $this->doGet(['custom_field_id' => $custom_field_id, ]);
		}

	public function getTyped(string $custom_field_id) : ?\PHPFUI\ConstantContact\Definition\CustomField
		{
		$data = $this->get($custom_field_id);

		return $data ? new \PHPFUI\ConstantContact\Definition\CustomField($data) : null;
		}


	/**
	 * Update a custom field.
	 *
	 * Update an existing custom field.
	 *
	 * @param string $custom_field_id The ID that uniquely identifies the custom field to update.
	 * @param \PHPFUI\ConstantContact\Definition\CustomFieldPutRequest $body The JSON payload used to update an existing custom field. Any properties omitted in the PUT request are overwritten with a null value.
	 */
	public function put(string $custom_field_id, \PHPFUI\ConstantContact\Definition\CustomFieldPutRequest $body) : ?array
		{

		return $this->doPut(['custom_field_id' => $custom_field_id, 'body' => $body->getData(), ]);
		}

	public function putTyped(string $custom_field_id, \PHPFUI\ConstantContact\Definition\CustomFieldPutRequest $body) : ?\PHPFUI\ConstantContact\Definition\CustomField
		{
		$data = $this->put($custom_field_id, $body);

		return $data ? new \PHPFUI\ConstantContact\Definition\CustomField($data) : null;
		}

	}
