<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3;

class ContactExports extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contact_exports/{file_export_id}');
		}

	/**
	 * Retrieve Exported Contacts File
	 *
	 * Use this endpoint to retrieve (GET) a CSV file containing exported contacts
	 * by providing the `activity_id` of a completed CSV export activity.
	 *
	 *
	 * @param string $file_export_id The unique ID of the exported file provided in the results: section of the export contacts activity response.
	 */
	public function get(string $file_export_id) : ?array
		{

		return $this->doGet(['file_export_id' => $file_export_id, ]);
		}

	public function getTyped(string $file_export_id) : ?\PHPFUI\ConstantContact\Definition\ActivityExportStatus
		{
		$data = $this->get($file_export_id);

		return $data ? new \PHPFUI\ConstantContact\Definition\ActivityExportStatus($data) : null;
		}

	}
