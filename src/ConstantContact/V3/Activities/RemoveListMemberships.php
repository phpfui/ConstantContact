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
	 * or more lists. Use the properties in the `source` object to remove specific
	 * contacts from your targeted lists. Use the `list_ids` array to specify
	 * the lists from which you want to remove the source contacts.
	 * 
	 *
	 * @param \PHPFUI\ConstantContact\Definition\ListActivityRemoveContacts $body The JSON payload used to create the 'remove contacts from lists' activity
	 */
	public function post(\PHPFUI\ConstantContact\Definition\ListActivityRemoveContacts $body) : array
		{
		return $this->doPost(['body' => $body->getData(), ]);
		}
	}