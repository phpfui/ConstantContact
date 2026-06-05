<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\SummaryReports;

class SmsCampaignSummaries extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/summary_reports/sms_campaign_summaries');
		}

	/**
	 * GET an SMS Campaigns Summary Report
	 *
	 * Use this method to get SMS campaign summary details, including the total
	 * number of times that each contact uniquely interacted with each tracked
	 * campaign activity and aggregate tracking statistics. Results are sorted
	 * in descending order by the date the SMS was last sent (`last_sent_date`).
	 *
	 * The `start_at` date is required. Use both the `start_at` and `end_at`
	 * date query parameters to return only SMS campaign summary details that
	 * occurred within a specified date range.
	 * Use the `limit` query parameter to limit the number of results returned
	 * per page.
	 *
	 * @param string $limit Use to limit the number of results to return on a single page (from 1 to 50). The default setting is 50.
	 * @param string $start_at Use to limit the results to include SMS campaign summary details for SMS campaigns sent on or after the required `start_at` date you specify. ISO 8601 format.
	 * @param string $end_at Use to limit the results to include SMS campaign summary details for SMS campaigns sent on or before the `end_at` date you specify. ISO 8601 format.
	 */
	public function get(?string $limit = null, ?string $start_at = null, ?string $end_at = null) : ?array
		{

		return $this->doGet(['limit' => $limit, 'start_at' => $start_at, 'end_at' => $end_at, ]);
		}

	public function getTyped(?string $limit = null, ?string $start_at = null, ?string $end_at = null) : ?\PHPFUI\ConstantContact\Definition\SmsCampaignSummariesPage
		{
		$data = $this->get($limit, $start_at, $end_at);

		return $data ? new \PHPFUI\ConstantContact\Definition\SmsCampaignSummariesPage($data) : null;
		}

	}
