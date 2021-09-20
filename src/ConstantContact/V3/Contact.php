<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3;

class Contact extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contacts/{contact_id}');
		}


	/**
	 * GET a Contact
	 *
	 * This endpoint GETs a specific contact resource (contact_id). Use the
	 * `include` query parameter to add any of the available contact sub-resources
	 * to the response payload.
	 *
	 * @param string $contact_id Unique ID of contact to GET
	 * @param string $include Use `include` to specify which contact sub-resources to include in the response. Use a comma to separate multiple sub-resources. Valid values: `custom_fields`, `list_memberships`, `phone_numbers`, `street_addresses`, `notes`, and `taggings`.
	 */
	public function get(string $contact_id, ?string $include = null) : array
		{
		if (null !== $include)
			{
			$parts = explode(',', $include);
			$validValues = ['custom_fields' , 'list_memberships' , 'phone_numbers' , 'street_addresses' , 'taggings' , 'notes'];
			foreach ($parts as $part)
				{
				if (! in_array(trim($part), $validValues))
					{
					throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter include containing value '{$part}' is not one of (" . implode(', ', $validValues) . ') in ' . __METHOD__);
					}
				}
			}
		return $this->doGet(['contact_id' => $contact_id, 'include' => $include, ]);
		}

	/**
	 * PUT (update) a Contact
	 *
	 * The PUT method updates an existing contact. You must include the `update_source`
	 * property in the PUT request payload. To restore  a deleted contact you
	 * must specify the `update_source` as `Account`. When updating any resource
	 * using PUT, all properties are updated, overwriting all previous values.
	 * Any properties left blank or not included in the request are overwritten
	 * with null value - however this does not apply to contact subresources.
	 * Add or change any of the subresources by including them in the PUT request
	 * payload. Omitted subresources are not overwritten with null. If the
	 * contact being updated is deleted, the contact will be revived.
	 *
	 * @param string $contact_id Unique ID of contact to update
	 * @param PHPFUI\ConstantContact\Definition\ContactPutRequest $body JSON payload defining the contact object, with updates. Any properties left blank or not included in the PUT payload are overwritten with null value - does not apply to contact subresources.
	 */
	public function put(string $contact_id, PHPFUI\ConstantContact\Definition\ContactPutRequest $body) : array
		{
		return $this->doPut(['contact_id' => $contact_id, 'body' => $body, ]);
		}

	/**
	 * DELETE a Contact
	 *
	 * Deletes the contact identified by the contact_id path parameter. Deleted
	 * contacts won't receive email from you, and they don't count as active
	 * contacts. Unlike unsubscribed contacts, deleted contacts can be revived,
	 * or added back to an account. Learn how to [revive deleted contacts](https://v3.developer.constantcontact.com/api_guide/contacts_delete.html#revive).
	 *
	 *
	 * @param string $contact_id Unique ID of contact to DELETE
	 */
	public function delete(string $contact_id) : bool
		{
		return $this->doDelete(['contact_id' => $contact_id, ]);
		}
	}