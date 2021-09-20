<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Activities;

class AddListMemberships extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities/add_list_memberships');
		}


	/**
	 * Add Contacts to Lists
	 *
	 * Use this method to create an activity that adds contacts to one or more
	 * lists. Each contact can be a member of up to 50 lists. Use the properties
	 * in the `source` object to specify the contacts you want to add to lists.
	 * Use the `list_ids` array to specify which lists you want to add your
	 * source contacts to.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\ListActivityAddContacts $body The JSON payload used to create the 'add contacts to lists' activity
	 */
	public function post(\PHPFUI\ConstantContact\Definition\ListActivityAddContacts $body) : array
		{
		return $this->doPost(['body' => $body, ]);
		}
	}