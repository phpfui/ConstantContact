<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\ContactReports;

class ActivitySummary extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/contact_reports/{contact_id}/activity_summary');
		}

	/**
	 * GET Contact Action Summary
	 *
	 * Get a list of the recent emails (aka, campaign activities) sent to a
	 * specific contact and a summary of the actions the contact took on that
	 * email for the most recent 200 campaigns.
	 *
	 * @param string $contact_id The contact id which is requesting tracking activity data (e.g. aa9ff7b0-478d-11e6-8059-00163e3c8e19)
	 * @param string $start The starting date, in ISO 8601 format, to use to get campaigns. For example: 2019-01-01T00:00:00-0500.
	 * @param string $end The ending date, in ISO 8601 format, to use to get campaigns. For example: 2019-12-01T00:00:00-0500.
	 */
	public function get(string $contact_id, string $start, string $end) : array
		{

		return $this->doGet(['contact_id' => $contact_id, 'start' => $start, 'end' => $end, ]);
		}
	}
