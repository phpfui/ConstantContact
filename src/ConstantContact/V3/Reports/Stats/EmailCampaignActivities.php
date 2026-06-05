<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\Stats;

class EmailCampaignActivities extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/stats/email_campaign_activities/{campaign_activity_ids}');
		}

	/**
	 * GET an Email Campaign Activity Stats Report
	 *
	 * Use this method to get performance tracking statistics for up to ten
	 * email campaign activities. Statistics include the total number of times
	 * contacts interacted with your campaigns and how.
	 *
	 * For each `campaign_activity_id`, this method returns the `campaign_id`,
	 * the total counts (`stats`) for each type of tracked email activity,
	 * and the date and time that Constant Contact last refreshed (`last_refresh_time`)
	 * the `stats`.
	 *
	 * When requesting statistics for multiple email campaign activities, if
	 * one or more of the `campaign_activity_ids` do not exist, were deleted,
	 * or do not have any stats associated with it, the `campaign_activity_ids`
	 * and error details display under `errors`. If any single specified `campaign_activity_id`
	 * is invalid (malformed), a 404 error response is returned for all campaign
	 * activities.
	 *
	 * @param string $campaign_activity_ids A comma-separated list of `campaign_activity_id`s (UUID's).
	 */
	public function get(string $campaign_activity_ids) : ?array
		{

		return $this->doGet(['campaign_activity_ids' => $campaign_activity_ids, ]);
		}

	public function getTyped(string $campaign_activity_ids) : ?\PHPFUI\ConstantContact\Definition\CampaignActivityStatsQueryResultEmail
		{
		$data = $this->get($campaign_activity_ids);

		return $data ? new \PHPFUI\ConstantContact\Definition\CampaignActivityStatsQueryResultEmail($data) : null;
		}

	}
