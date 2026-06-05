<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Activities;

class ContactsTagsDelete extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities/contacts_tags_delete');
		}

	/**
	 * Delete Tags
	 *
	 * Use this method to create an asynchronous activity that deletes up to
	 * 500 tags. Deleted tags are automatically removed from tagged contacts.
	 * Use the `tag_ids` array of string values in the request body to specify
	 * which tags to delete.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\TagIdList500Limit $body An array of string values (`tag_id`s) to delete.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\TagIdList500Limit $body) : ?array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}

	public function postTyped(\PHPFUI\ConstantContact\Definition\TagIdList500Limit $body) : ?\PHPFUI\ConstantContact\Definition\ActivityTagging
		{
		$data = $this->post($body);

		return $data ? new \PHPFUI\ConstantContact\Definition\ActivityTagging($data) : null;
		}

	}
