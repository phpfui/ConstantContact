<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Activities;

class ContactsTaggingsAdd extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities/contacts_taggings_add');
		}

	/**
	 * Add Tags to Contacts
	 *
	 * Use this method to create an asynchronous activity that adds one or
	 * more tags to all contacts meeting your contact filtering criteria. Use
	 * the `source` type to identify contacts from which the specified tags
	 * (`tag_id`) are added.
	 * Source criteria are mutually exclusive. If the source is `all_active_contacts`
	 * or `list_ids`, you can optionally choose to `exclude` contacts by `contact_id`.
	 * Use the activity link in the results to check the status of your request.
	 *
	 * For more use case information, see "[Add Tags to Contacts](https://v3.developer.constantcontact.com/api_guide/add_tagging_activity.html)
	 *
	 *
	 * @param \PHPFUI\ConstantContact\Definition\TagAddRemoveContacts $body The JSON payload used to create an asynchronous activity that adds tags to contacts that meet your specified contact filtering criteria.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\TagAddRemoveContacts $body) : ?array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}

	public function postTyped(\PHPFUI\ConstantContact\Definition\TagAddRemoveContacts $body) : ?\PHPFUI\ConstantContact\Definition\ActivityTagging
		{
		$data = $this->post($body);

		return $data ? new \PHPFUI\ConstantContact\Definition\ActivityTagging($data) : null;
		}

	}
