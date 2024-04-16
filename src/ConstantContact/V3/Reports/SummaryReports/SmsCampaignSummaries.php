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
	 * Use this method to get a summary of aggregate tracking statistics for
	 * up to 500 SMS campaigns.
	 * The response results include the total number of times that each contact
	 * uniquely interacted with each tracked campaign activity. Results are
	 * sorted in descending order by the date the SMS was last sent (`last_sent_date`).
	 * Use the `limit` query parameter to limit the number of results returned
	 * per page. For example, if you may want to compare the tracking statistics
	 * for the last five SMS campaigns to those in the previous five SMS campaigns,
	 * set the `limit` parameter to `5`.
	 *
	 * @param string $limit Use to limit the number of results to return on a single page. The default is `50` and the maximum is `500` per page.
	 */
	public function get(?string $limit = null) : array
		{

		return $this->doGet(['limit' => $limit, ]);
		}
	}
