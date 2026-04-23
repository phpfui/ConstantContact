<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Activities;

class ContactsFileImport extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities/contacts_file_import');
		}

	/**
	 * Import Contacts using a CSV File
	 *
	 * This multipart method creates an asynchronous background job that adds
	 * or updates contacts by importing a CSV file containing contact information.
	 * Do not use a Content-Type header value with this method.
	 *
	 * Importing a new contact email address automatically sets the contact's
	 * `permission_to_send` property as `implicit` and the `opt_in_source`
	 * property as `Account`. Importing an existing contact only updates the
	 * contact properties you include in the request.
	 * Importing contacts with `sms_number`s requires using the `sms_permission_to_send`
	 * parameter  to specify permissions for all contacts being imported. Set
	 * to `explicit` to specify that all contacts either provided explicit
	 * permission. Set to `not_set` if permission was not provided. If `explicit`,
	 * you must also include the `sms_consent_date` as a column header to include
	 * the date the contact consented to receiving SMS messages.
	 * Contacts must have either an email address or an SMS number defined.
	 *
	 *
	 * The CSV file has a maximum of 40,000 lines including the header row
	 * (39,999 contacts) and a maximum file size of 4 megabytes (MB).  Lines
	 * above the 40,000 line maximum are not processed. If the request body
	 * exceeds 4 MB, only the contacts contained in the first 4 MB are imported
	 * and the remaining data is dropped.
	 *
	 * @param string $file The CSV file you are importing  must include either `email` or `sms_number` as a column heading. Other properties you can include using column headings are: `first_name`.  `last_name`, `phone`, `job_title`, `anniversary`, `birthday_day`, `birthday_month`, `company_name`, `street`, `street2`, `city`, `state`, `zip`, `country`, and `sms_consent_date`. 

If adding an `sms_number`, you must also include the `sms_permission_to_send` parameter and set it to either `not_set` or `explicit`. If `explicit`, requires including `sms_consent_date` as a column header to specify the date the contact consented to receiving SMS messages. 

You can also use custom fields as column headings. Enter the custom field name prefixed with `cf:` as the column heading. For example, use `cf:first_name` as the header name if you have a custom field named "first_name". The custom field must already exist in the Constant Contact account you are using. Depending on the custom field data type, you can enter dates or strings as the value of the custom field. Each contact can contain up to 25 different custom fields.
	 * @param string $list_ids Specify which contact lists you are adding all imported contacts to as an array of up to 50 contact `list_id` values.
	 * @param string $sms_permission_to_send If importing contact `sms_number`s, use this parameter to specify how SMS consent was provided. If all contacts in the file provided their consent, set to `explicit` and include each contact's `sms_consent_date`. If all contacts in the file have not yet provided consent, set to `not_set` (`sms_consent_date` is not required). You cannot message a contact that does not have a sms consent date set.
	 */
	public function post(string $file, string $list_ids, ?string $sms_permission_to_send = null) : ?array
		{

		if (null !== $sms_permission_to_send)
			{
			$validValues = ['not_set', 'explicit'];

			if (! \in_array($sms_permission_to_send, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter sms_permission_to_send with value '{$sms_permission_to_send}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		return $this->doPost(['file' => $file, 'list_ids' => $list_ids, 'sms_permission_to_send' => $sms_permission_to_send, ]);
		}

	public function postTyped(string $file, string $list_ids, ?string $sms_permission_to_send = null) : ?\PHPFUI\ConstantContact\Definition\ActivityImport
		{
		$data = $this->post($file, $list_ids, $sms_permission_to_send);

		return $data ? new \PHPFUI\ConstantContact\Definition\ActivityImport($data) : null;
		}

	}
