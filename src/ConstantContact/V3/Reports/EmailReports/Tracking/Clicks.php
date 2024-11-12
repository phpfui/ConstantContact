<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\EmailReports\Tracking;

class Clicks extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/email_reports/{campaign_activity_id}/tracking/clicks');
		}

	/**
	 * GET an Email Clicks Report
	 *
	 * Use this method to get each time a contact clicked a link, the click
	 * date and time, and the device type they used. Use the `url_id` query
	 * parameter to get a clicks report for a specific link URL. Clicks report
	 * data is sorted with most recent activity listed first.
	 *
	 * @param string $campaign_activity_id The ID that uniquely identifies the email campaign activity to use for this report.
	 * @param int $url_id The ID that uniquely identifies a single link URL for which you want to get a clicks report.
	 * @param string $limit The number of tracking activities to return on a page.
	 */
	public function get(string $campaign_activity_id, ?int $url_id = null, ?string $limit = null) : ?array
		{

		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, 'url_id' => $url_id, 'limit' => $limit, ]);
		}

	public function getTyped(string $campaign_activity_id, ?int $url_id = null, ?string $limit = null) : ?\PHPFUI\ConstantContact\Definition\ClicksTrackingActivitiesPage
		{
		$data = $this->get($campaign_activity_id, $url_id, $limit);

		return $data ? new \PHPFUI\ConstantContact\Definition\ClicksTrackingActivitiesPage($data) : null;
		}

	}
