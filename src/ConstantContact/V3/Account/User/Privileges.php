<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Account\User;

class Privileges extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/account/user/privileges');
		}


	/**
	 * GET User Privileges
	 *
	 * Use this method to return the user privileges associated with your access
	 * token as an array of objects. This method returns all user privileges,
	 * including privileges the V3 API does not currently use. Constant Contact
	 * requires specific user privileges to make requests using the V3 API.
	 * For more information, see the [User Privileges and Roles Overview](/api_guide/user_privileges.html).
	 *
	 *
	 */
	public function get() : array
		{
		return $this->doGet([]);
		}
	}