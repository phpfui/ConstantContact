<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\EmailReports;

class CampaignPerformance extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/email_reports/campaign_performance');
		}

	/**
	 * GET Campaign Performance Statistics
	 *
	 * Retrieves campaign performance stats for one or more campaigns for a
	 * given date range.
	 *
	 * @param string $start_at The date range start in ISO 8601 format (e.g. '2016-01-27T21:56:37.011Z')
	 * @param string $end_at The date range end in ISO 8601 format (e.g. '2016-01-27T21:56:37.011Z')
	 * @param string $count Number of campaign stats to return in a single request.
	 * @param string $filter Filter campaigns by adjusted_timestamp (default) or start_at.
	 */
	public function get(?string $start_at = null, ?string $end_at = null, ?string $count = null, ?string $filter = null) : ?array
		{

		return $this->doGet(['start_at' => $start_at, 'end_at' => $end_at, 'count' => $count, 'filter' => $filter, ]);
		}

	public function getTyped(?string $start_at = null, ?string $end_at = null, ?string $count = null, ?string $filter = null) : ?\PHPFUI\ConstantContact\Definition\CampaignPerformanceStatsQueryResult
		{
		$data = $this->get($start_at, $end_at, $count, $filter);

		return $data ? new \PHPFUI\ConstantContact\Definition\CampaignPerformanceStatsQueryResult($data) : null;
		}
	}
