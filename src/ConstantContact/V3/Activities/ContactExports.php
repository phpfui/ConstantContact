<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Activities;

class ContactExports extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities/contact_exports');
		}

	/**
	 * Export Contacts to a File
	 *
	 * Use this method to create an activity that exports contacts and contact
	 * details to a CSV file. By default, all contacts are exported. To filter
	 * contacts to export, specify the source to use, `contact_id`, `list_id`,
	 * or `segment_id` (all mutually exclusive).
	 * By default, all contact related fields are exported. Use the fields
	 * array to only export specific contact fields. You must export `email_address`
	 * to successfully export `email_optin_source`, `email_optin_date`, `email_optout_source`,
	 * `email_optout_date`, or `email_optout_reason`.
	 * After Constant Contact finishes processing the activity, use the `results`
	 * link in the response body to retrieve the CSV file.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\ContactsExport $body A JSON payload that specifies the contacts (rows in the CSV file) and contact properties (columns in the CSV file) you want to export.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\ContactsExport $body) : array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}
	}
