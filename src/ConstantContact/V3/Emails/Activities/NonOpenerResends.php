<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Emails\Activities;

class NonOpenerResends extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/emails/activities/{campaign_activity_id}/non_opener_resends');
		}


	/**
	 * GET Details for a Resend to Non-openers Campaign Activity
	 *
	 * Get details about a resend to non-openers campaign activity. If a resend
	 * activity does not exist for the specified `campaign_activity_id`, an
	 * empty list is returned in the results. You can only create one resend
	 * activity per  email campaign.
	 *
	 * @param string $campaign_activity_id The unique ID for the primary email campaign activity.
	 */
	public function get(string $campaign_activity_id) : array
		{
		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, ]);
		}
	}