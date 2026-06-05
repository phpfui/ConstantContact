<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Activities;

class RemoveListMemberships extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities/remove_list_memberships');
		}

	/**
	 * Remove Contacts from Lists
	 *
	 * Use this method to create an activity that removes contacts from one
	 * or more contact lists. Use the properties in the `source` object to
	 * remove specific contacts from your lists. Use the `list_ids` array to
	 * specify the target lists from which contacts are removed. Optionally,
	 * if the source is  `all_active_contacts` (billable) or `list_ids`, use
	 * the `exclude` object to exclude specific contacts from being removed
	 * from the destination lists.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\ListActivityRemoveContacts $body The JSON payload used to create the Remove Contacts from Lists' activity
	 */
	public function post(\PHPFUI\ConstantContact\Definition\ListActivityRemoveContacts $body) : ?array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}

	public function postTyped(\PHPFUI\ConstantContact\Definition\ListActivityRemoveContacts $body) : ?\PHPFUI\ConstantContact\Definition\ActivityListsMembership
		{
		$data = $this->post($body);

		return $data ? new \PHPFUI\ConstantContact\Definition\ActivityListsMembership($data) : null;
		}

	}
