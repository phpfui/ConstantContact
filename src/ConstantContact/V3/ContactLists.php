<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3;

class ContactLists extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contact_lists');
		}

	/**
	 * GET Lists Collection
	 *
	 * Use this method to return details about all contact lists for the account.
	 *
	 * <div class="Msg"><p class="note-text">This method does not currently
	 * support filtering results using the contact list update date.</p></div>
	 *
	 *
	 * @param int $limit Use to specify the number of results displayed per page of output, from 1 - 500, default = 50.
	 * @param bool $include_count Set `include_count` to `true` to return the total number of contact lists that meet your selection criteria.
	 * @param string $include_membership_count Use to include the total number of contacts per list. Set to  `active`, to count only active (mailable) contacts, or `all` to count all contacts.
	 * @param string $name Use to get details for a single list by entering the full name of the list.
	 * @param string $status Use to get lists by status. Accepts comma-separated status values.
	 */
	public function get(?int $limit = null, ?bool $include_count = null, ?string $include_membership_count = null, ?string $name = null, ?string $status = null) : array
		{

		if (null !== $include_membership_count)
			{
			$validValues = ['all', 'active'];

			if (! \in_array($include_membership_count, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter include_membership_count with value '{$include_membership_count}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		if (null !== $status)
			{
			$validValues = ['all', 'active', 'deleted'];

			if (! \in_array($status, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter status with value '{$status}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		return $this->doGet(['limit' => $limit, 'include_count' => $include_count, 'include_membership_count' => $include_membership_count, 'name' => $name, 'status' => $status, ]);
		}

	public function getReturnSchema(?int $limit = null, ?bool $include_count = null, ?string $include_membership_count = null, ?string $name = null, ?string $status = null) : \PHPFUI\ConstantContact\Definition\ContactListArray
		{
		return new \PHPFUI\ConstantContact\Definition\ContactListArray($this->get($limit, $include_count, $include_membership_count, $name, $status));
		}


	/**
	 * POST (create) a List
	 *
	 * Create a new contact list resource
	 *
	 * @param \PHPFUI\ConstantContact\Definition\ListInput $body JSON payload defining the new contact list
	 */
	public function post(\PHPFUI\ConstantContact\Definition\ListInput $body) : array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}

	public function postReturnSchema(\PHPFUI\ConstantContact\Definition\ListInput $body) : \PHPFUI\ConstantContact\Definition\ContactListPutPost
		{
		return new \PHPFUI\ConstantContact\Definition\ContactListPutPost($this->post($body));
		}

	}
