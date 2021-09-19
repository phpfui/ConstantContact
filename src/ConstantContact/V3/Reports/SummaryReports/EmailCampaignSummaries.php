<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\SummaryReports;

class EmailCampaignSummaries extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/summary_reports/email_campaign_summaries');
		}


	/**
	 * GET an Email Campaigns Summary Report
	 *
	 * Use this method to get aggregate email campaign statistics for up to
	 * five hundred email campaigns. The response results include the total
	 * number of times that each contact uniquely interacted with each tracked
	 * campaign activity.
	 * 
	 * Results are sorted in descending order by the date that the email was
	 * last sent (<code>last_sent_date</code>). Use the <code>limit</code>
	 * query parameter to limit the number of email campaign summary reports
	 * listed on each page.
	 * 
	 * 
	 * 
	 * For more use case information, see "[Get an Email Campaign Summary Report](/api_guide/email_bulk_campaign_summary_report.html)"
	 *
	 *
	 * @param string $limit Use the `limit` query parameter to limit the number of email campaign summaries to return on a single page. The default is `50` and the maximum is `500` per page.
	 */
	public function get(?string $limit = null) : array
		{
		return $this->doGet(['limit' => $limit, ]);
		}
	}