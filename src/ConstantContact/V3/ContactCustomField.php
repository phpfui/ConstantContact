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
	 * This DELETE request deletes a custom_field from the user's account
	 *
	 * @param string $custom_field_id Unique ID of the custom_field on which to operate.
	 */
	public function delete(string $custom_field_id) : array
		{

		return $this->doDelete(['custom_field_id' => $custom_field_id, ]);
		}

	/**
	 * GET a custom_field
	 *
	 * This GET call retrieves a `custom_field` resource, specified by `custom_field_id`.
	 *
	 *
	 * @param string $custom_field_id Unique ID of the `custom_field` on which to operate.
	 */
	public function get(string $custom_field_id) : array
		{

		return $this->doGet(['custom_field_id' => $custom_field_id, ]);
		}

	public function getReturnSchema(string $custom_field_id) : \PHPFUI\ConstantContact\Definition\CustomFieldResource
		{
		return new \PHPFUI\ConstantContact\Definition\CustomFieldResource($this->get($custom_field_id));
		}


	/**
	 * PUT (update) a custom_field
	 *
	 * This PUT request updates an existing `custom_field` object.
	 *
	 * @param string $custom_field_id Unique ID of the `custom_field` on which to operate.
	 * @param \PHPFUI\ConstantContact\Definition\CustomFieldInput $body The JSON payload used to update an existing custom field. Any properties omitted in the PUT request are overwritten with a null value.
	 */
	public function put(string $custom_field_id, \PHPFUI\ConstantContact\Definition\CustomFieldInput $body) : array
		{

		return $this->doPut(['custom_field_id' => $custom_field_id, 'body' => $body->getData(), ]);
		}

	public function putReturnSchema(string $custom_field_id, \PHPFUI\ConstantContact\Definition\CustomFieldInput $body) : \PHPFUI\ConstantContact\Definition\CustomFieldResource
		{
		return new \PHPFUI\ConstantContact\Definition\CustomFieldResource($this->put($custom_field_id, $body));
		}

	}
