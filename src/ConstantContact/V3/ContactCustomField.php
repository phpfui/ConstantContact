<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3;

class ContactCustomField extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contact_custom_fields/{custom_field_id}');
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
		return $this->doPut(['custom_field_id' => $custom_field_id, 'body' => $body, ]);
		}

	/**
	 * DELETE a custom_field
	 *
	 * This DELETE request deletes a custom_field from the user's account
	 *
	 * @param string $custom_field_id Unique ID of the custom_field on which to operate.
	 */
	public function delete(string $custom_field_id) : bool
		{
		return $this->doDelete(['custom_field_id' => $custom_field_id, ]);
		}
	}