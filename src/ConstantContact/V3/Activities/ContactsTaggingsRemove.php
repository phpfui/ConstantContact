<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Activities;

class ContactsTaggingsRemove extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities/contacts_taggings_remove');
		}


	/**
	 * Remove Tags from Contacts
	 *
	 * Use this method to create an asynchronous activity that removes one
	 * or more tags from all contacts meeting your contact filtering criteria.
	 * Filtering criteria must include the `source` type used to identify contacts
	 * from which the specified tags (`tag_id`) are removed.
	 * 
	 * Source types are mutually exclusive. If the specified source is either
	 * `all_active_contacts` or `list_ids`, you can optionally choose to `exclude`
	 * specified contacts by `contact_id`. Use the activity link in the results
	 * to check the status of your request."
	 * 
	 * For more use case information, see "[Remove Tags from Contacts](https://v3.developer.constantcontact.com/api_guide/remove_tagging_activity.html)"
	 *
	 * 
	 *
	 * @param \PHPFUI\ConstantContact\Definition\TagAddRemoveContacts $body The JSON payload used to create an asynchronous activity that removes tags from contacts meeting your specified contact filtering criteria.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\TagAddRemoveContacts $body) : array
		{
		return $this->doPost(['body' => $body, ]);
		}
	}