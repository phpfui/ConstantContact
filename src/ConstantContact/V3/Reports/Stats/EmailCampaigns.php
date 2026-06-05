<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\Stats;

class EmailCampaigns extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/stats/email_campaigns/{campaign_ids}');
		}

	/**
	 * GET an Email Campaign Stats Report
	 *
	 * Use this method to get email campaign performance tracking statistics
	 * for one or more campaigns, including the total number of times contacts
	 * interacted with your campaigns and how.
	 *
	 * For each `campaign_id`, this method returns lists that include total
	 * counts (`stats`) for each type of tracked email and relevant campaign-related
	 * percentages (`percents`). It also returns the date and time at which
	 * the campaign stats were last refreshed.
	 * If any specified `campaign_id` is invalid, a 404 error response is returned
	 * for all campaigns.
	 *
	 * @param string $campaign_ids A comma-separated list of `campaign_id`s (UUID's).
	 */
	public function get(string $campaign_ids) : ?array
		{

		return $this->doGet(['campaign_ids' => $campaign_ids, ]);
		}

	public function getTyped(string $campaign_ids) : ?\PHPFUI\ConstantContact\Definition\CampaignStatsQueryResultEmail
		{
		$data = $this->get($campaign_ids);

		return $data ? new \PHPFUI\ConstantContact\Definition\CampaignStatsQueryResultEmail($data) : null;
		}

	}
