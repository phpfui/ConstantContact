<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

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
	 * Importing a new contact automatically sets the contact's `permission_to_send`
	 * property as `implicit` and the `opt_in_source` property as `Account`.
	 * Importing an existing contact only updates the contact properties you
	 * include in the request.
	 * 
	 * The CSV file has a maximum of 40,000 lines including the header row
	 * (39,999 contacts) and a maximum file size of 4 megabytes (MB).  Lines
	 * above the 40,000 line maximum are not processed. If the request body
	 * exceeds 4 MB, only the contacts contained in the first 4 MB are imported
	 * and the remaining data is dropped.
	 *
	 * @param string $file The CSV file you are importing. The column headings that you can use in the file are: `first_name`,
`last_name`, `email`, `phone`, `job_title`, `anniversary`, `birthday_day`, `birthday_month`, `company_name`, `street`, `street2`, `city`, `state`, `zip`, and `country`. The only required column heading is `email`.


You can also use custom fields as column headings. Enter the custom field name prefixed with `cf:` as the column heading. For example, use `cf:first_name` as the header name if you have a custom field named "first_name". The custom field must already exist in the Constant Contact account you are using. Depending on the custom field data type, you can enter dates or strings as the value of the custom field. Each contact can contain up to 25 different custom fields.

	 * @param array $list_ids Specify which contact lists you are adding all imported contacts to as an array of up to 50 contact `list_id` values.
	 */
	public function post(string $file, array $list_ids) : array
		{
		return $this->doPost(['file' => $file, 'list_ids' => $list_ids, ]);
		}
	}