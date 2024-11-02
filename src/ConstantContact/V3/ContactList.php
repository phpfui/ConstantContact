<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3;

class ContactList extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contact_lists/{list_id}');
		}

	/**
	 * DELETE a List
	 *
	 * Deletes the specified contact list and its membership. DELETE List requests
	 * are processed asynchronously, and you can track the status of the request
	 * by making a GET call to the URI shown in the `_links` property in the
	 * response.
	 *
	 * @param string $list_id Unique ID of the list to delete
	 */
	public function delete(string $list_id) : array
		{

		return $this->doDelete(['list_id' => $list_id, ]);
		}

	public function deleteReturnSchema(string $list_id) : \PHPFUI\ConstantContact\Definition\ActivityDeleteListResponse
		{
		return new \PHPFUI\ConstantContact\Definition\ActivityDeleteListResponse($this->delete($list_id));
		}


	/**
	 * GET a List
	 *
	 * Use this method to get details about a specific contact list (`list_id`).
	 *
	 *
	 * @param string $list_id The system generated ID that uniquely identifies a contact list.
	 * @param string $include_membership_count Returns the total number of contacts per list that meet your selection criteria. Set the `include_membership_count` to `active`, to count only active contacts, or `all` to include all contacts in the count.
	 */
	public function get(string $list_id, ?string $include_membership_count = null) : array
		{

		if (null !== $include_membership_count)
			{
			$validValues = ['all', 'active'];

			if (! \in_array($include_membership_count, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter include_membership_count with value '{$include_membership_count}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		return $this->doGet(['list_id' => $list_id, 'include_membership_count' => $include_membership_count, ]);
		}

	public function getReturnSchema(string $list_id, ?string $include_membership_count = null) : \PHPFUI\ConstantContact\Definition\ContactList
		{
		return new \PHPFUI\ConstantContact\Definition\ContactList($this->get($list_id, $include_membership_count));
		}


	/**
	 * PUT (update) a List
	 *
	 * Updates an existing contact list resource, specified by `list_id`
	 *
	 * @param string $list_id Unique ID of the contact list to update
	 * @param \PHPFUI\ConstantContact\Definition\ListInput $JSON_PUT_body JSON payload containing updates to the specified contact list
	 */
	public function put(string $list_id, \PHPFUI\ConstantContact\Definition\ListInput $JSON_PUT_body) : array
		{

		return $this->doPut(['list_id' => $list_id, 'JSON_PUT_body' => $JSON_PUT_body->getData(), ]);
		}

	public function putReturnSchema(string $list_id, \PHPFUI\ConstantContact\Definition\ListInput $JSON_PUT_body) : \PHPFUI\ConstantContact\Definition\ContactListPutPost
		{
		return new \PHPFUI\ConstantContact\Definition\ContactListPutPost($this->put($list_id, $JSON_PUT_body));
		}

	}
