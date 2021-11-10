<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\ContactReports;

class OpenAndClickRates extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/contact_reports/{contact_id}/open_and_click_rates');
		}


	/**
	 * GET Average Open and Click Rates
	 *
	 * <p>Gets the average open and click rate for a given account and contact.<p>Looks
	 * at all tracking activities for bulk emails from a given contact over
	 * the given date range. Range cannot exceed 5 years.</p><p>Returns the
	 * rates and the number of campaign activities that were included in the
	 * calculation.</p><p>If no activities fall into the given date range,
	 * all rates will return 0 and the number of included activities will be
	 * 0.</p>
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