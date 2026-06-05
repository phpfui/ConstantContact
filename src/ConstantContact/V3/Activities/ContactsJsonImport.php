<?php

// Generated file. Do not edit by hand. Use update.php in project root.

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
	 * importing and the contact lists to which you want to add the imported
	 * contacts. A contact's data must include an `email` address and/or `sms_number`.
	 * The `sms_number` must be a US phone number to associate with the contact's
	 * SMS-enabled phone. Valid formats are <code>1231231234</code> or <code>123-123-1234</code>
	 * (the country code must be valid).
	 *
	 * Importing a new contact using this method automatically sets the contact's
	 * email `permission_to_send` property to `implicit` and the `opt_in_source`
	 * property as `Account`. Importing an existing contact only updates the
	 * contact properties you include in the request. For each contact, you
	 * can import up to three addresses and three phone numbers. International
	 * phone numbers are currently not supported.
	 *
	 * To import custom fields, prefix the custom field name with `cf:` and
	 * add it as a contact property. For example, use the property name `cf:first_name`
	 * if you have a custom field named `first_name`. The custom field must
	 * already exist in the Constant Contact account you are using. Each contact
	 * can contain up to 25 custom fields.
	 *
	 * To include a contact's `sms_number`, if the contact provided explicit
	 * permission to receive SMS messages, you must set the `sms_permission_to_send`
	 * property to `explicit` and specify the date of consent using the `sms_consent_date`
	 * column header. If explicit permission was not provided, set `sms_permission_to_send`
	 * to `not_set` (the `sms_consent_date` is not required). If the `sms_consent_date`
	 * is not set, SMS messages cannot be sent to contacts and `sms_permission_to_send`
	 * defaults to `not_set`. Valid value formats for `sms_consent_date` include
	 * MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY,
	 * or M-DD-YYYY.
	 *
	 * The request body payload has a maximum size of 4 megabytes (MB). If
	 * the request body exceeds 4 MB, this method only imports the first 4
	 * MB and drops the remaining data. Use the activity URL to check the status
	 * of the import activity request.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\ContactsJsonImport $body The JSON request payload that contains the contact data and contact lists for the import.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\ContactsJsonImport $body) : ?array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}

	public function postTyped(\PHPFUI\ConstantContact\Definition\ContactsJsonImport $body) : ?\PHPFUI\ConstantContact\Definition\ActivityImport
		{
		$data = $this->post($body);

		return $data ? new \PHPFUI\ConstantContact\Definition\ActivityImport($data) : null;
		}

	}
