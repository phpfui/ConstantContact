<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\EmailReports\Tracking;

class Optouts extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/email_reports/{campaign_activity_id}/tracking/optouts');
		}


	/**
	 * GET an Email Opt-outs Report
	 *
	 * Use this method to get a report listing each contact that clicked the
	 * unsubscribe link in the email campaign activity to opt-out from receiving
	 * emails sent from your Constant Contact account. This report includes
	 * contact information, such as the contact's email address, unique ID,
	 * and the opt-out date and time. Opt-out report data is sorted with the
	 * most recent activity listed first. For more use case information, see
	 * [Get an Email Opt-outs Report](https://v3.developer.constantcontact.com/api_guide/email_summary_optouts_report.html)
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