<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

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
	 * Use this method to create an activity that exports contacts to a CSV
	 * file. After Constant Contact finishes processing the activity, use the
	 * `results` link in the response body to retrieve the CSV file.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\ContactsExport $body A JSON payload that specifies the contacts (rows in the CSV file) and contact properties (columns in the CSV file) you want to export.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\ContactsExport $body) : array
		{
		return $this->doPost(['body' => $body->getData(), ]);
		}
	}