<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Activities;

class ContactDelete extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities/contact_delete');
		}


	/**
	 * Delete Contacts in Bulk
	 *
	 * Use this endpoint to bulk delete contacts in an account. Contacts to
	 * delete are specified by contact_id (up to 500), or by list_id (up to
	 * 50 lists); all contacts that are members of the list_ids are deleted.
	 * Deleted contacts won’t receive email from you, and they don’t count
	 * as active contacts. Unlike unsubscribed contacts, deleted contacts can
	 * be added back to an account. [Learn how to revive deleted contacts](/api_guide/contacts_delete.html#revive).
	 *
	 *
	 * @param PHPFUI\ConstantContact\Definition\ContactDelete $body The request body contains an array of contact_ids <em>or</em> list_ids. All contact_ids provided are deleted, or all members of each specified list_id are deleted.
	 */
	public function post(PHPFUI\ConstantContact\Definition\ContactDelete $body) : array
		{
		return $this->doPost(['body' => $body, ]);
		}
	}