<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Activities;

class ContactsJsonImport extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities/contacts_json_import');
		}


	/**
	 * Import Contacts using a JSON Payload
	 *
	 * Use this method to create an asynchronous background job that adds new
	 * contacts or updates existing contacts by importing a JSON payload. This
	 * method requires a request body that contains the contact data you are
	 * importing and the contact lists you are adding all imported contacts
	 * to.
	 * 
	 * Importing a new contact automatically sets the contact's `permission_to_send`
	 * property as `implicit` and the `opt_in_source` property as `Account`.
	 * Importing an existing contact only updates the contact properties you
	 * include in the request.
	 * 
	 * You can import custom fields by prefixing a custom field name with `cf:`
	 * and adding it as a contact property. For example, use the property name
	 * `cf:first_name` if you have a custom field named first_name. The custom
	 * field must already exist in the Constant Contact account you are using.
	 * Each contact can contain up to 25 custom fields.
	 * 
	 * The request body payload has a maximum size of 4 megabytes (MB). If
	 * the request body exceeds 4 MB, this method only imports the first 4
	 * MB and drops the remaining data.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\ContactsJsonImport $body The JSON request payload that contains the contact data and contact lists for the import.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\ContactsJsonImport $body) : array
		{
		return $this->doPost(['body' => $body, ]);
		}
	}