<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\EmailReports\Tracking;

class Sends extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/email_reports/{campaign_activity_id}/tracking/sends');
		}

	/**
	 * GET an Email Sends Report
	 *
	 * Use this method to get each contact that was sent a specific email campaign
	 * activity. This sends report includes general contact data such as the
	 * date and time that the email campaign activity was sent to a contact's
	 * email address, the contact's first and last name, and unique ID. This
	 * report lists the most recent activity first. For more use case information,
	 * see [Get an Sends report for an Email Campaign Activity](https://v3.developer.constantcontact.com/api_guide/email_summary_sends_report.html)
	 * in the API guide.
	 *
	 * @param string $campaign_activity_id The unique ID for an email campaign activity to use for this report.
	 * @param string $limit The number of tracking activities to return on a page.
	 */
	public function get(string $campaign_activity_id, ?string $limit = null) : ?array
		{

		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, 'limit' => $limit, ]);
		}

	public function getTyped(string $campaign_activity_id, ?string $limit = null) : ?\PHPFUI\ConstantContact\Definition\SendsTrackingActivitiesPage
		{
		$data = $this->get($campaign_activity_id, $limit);

		return $data ? new \PHPFUI\ConstantContact\Definition\SendsTrackingActivitiesPage($data) : null;
		}

	}
