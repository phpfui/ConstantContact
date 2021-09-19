<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\EmailReports\Tracking;

class Forwards extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/email_reports/{campaign_activity_id}/tracking/forwards');
		}


	/**
	 * GET an Email Forwards Report
	 *
	 * Use this method to get a report listing each time a contact forwarded
	 * the email campaign activity using the forwarding link in the email footer.
	 * The report includes general contact information, such as the contact's
	 * email address and unique ID, and the date and time that the email campaign
	 * activity was forwarded. Forwards report data is sorted with the most
	 * recent activity listed first. For more use case information, see [Get
	 * an Email Forwards Report](/api_guide/email_summary_forwards_report.html)
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