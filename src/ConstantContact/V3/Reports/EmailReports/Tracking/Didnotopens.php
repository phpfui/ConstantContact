<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\EmailReports\Tracking;

class Didnotopens extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/email_reports/{campaign_activity_id}/tracking/didnotopens');
		}


	/**
	 * GET an Email Did Not Opens Report
	 *
	 * Use this method to get a report listing each contact that was sent,
	 * but did not open the specified email campaign activity. This report
	 * lists contact information such as the contact's email address and unique
	 * ID, and the date and time that the email campaign activity was sent.
	 * This report lists the most recent activity first. For more use case
	 * information, see [Get a Did Not Opens Report for an Email Campaign Activity](https://v3.developer.constantcontact.com/api_guide/email_summary_non_opens_report.html)
	 * in the API guide.
	 *
	 * @param string $campaign_activity_id The ID that uniquely identifies the email campaign activity to use for this report.
	 * @param string $limit The number of tracking activities to return on a page.
	 */
	public function get(string $campaign_activity_id, ?string $limit = null) : array
		{
		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, 'limit' => $limit, ]);
		}
	}