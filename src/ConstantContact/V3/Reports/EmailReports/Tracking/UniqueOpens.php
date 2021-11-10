<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\EmailReports\Tracking;

class UniqueOpens extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/email_reports/{campaign_activity_id}/tracking/unique_opens');
		}


	/**
	 * GET an Email Unique Opens Report
	 *
	 * Use this method to get a unique opens report that provides details about
	 * the last time that each contact opened the specified email campaign
	 * activity. This report includes general contact information such as the
	 * contact's email address and unique ID, the date and time they opened
	 * the email campaign activity, and the type of device they used to open
	 * it. This report lists the most recent activity first. For more use case
	 * information, see [Get an Unique Opens Report for an Email Campaign Activity](https://v3.developer.constantcontact.com/api_guide/email_summary_unique_opens_report.html)
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