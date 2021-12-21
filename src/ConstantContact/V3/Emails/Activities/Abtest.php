<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Emails\Activities;

class Abtest extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/emails/activities/{campaign_activity_id}/abtest');
		}

	/**
	 * GET A/B Test Details for an Email Campaign Activity
	 *
	 * Use this method to get A/B test details for a primary email campaign
	 * activity, such as the alternate email subject line, the contact test
	 * percentage size, and the number of hours to wait to determine the winning
	 * subject line to use. Currently, A/B tests support subject line only.
	 *
	 *
	 * @param string $campaign_activity_id The unique ID for the primary email campaign activity.
	 */
	public function get(string $campaign_activity_id) : array
		{

		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, ]);
		}

	/**
	 * DELETE an A/B Test for an Email Campaign Activity
	 *
	 * Deletes an A/B Test on an primary email campaign activity. You can only
	 * delete A/B tests that have a `current_status` of `Draft`. Deleting an
	 * A/B tests reverts the email campaign activity `type` from A/B Test (code=
	 * `57`) back to NewsLetter (code= `10`). Constant Contact uses the original
	 * subject line, rather than the alternate A/B test subject line, when
	 * an A/B test is deleted.
	 *
	 * @param string $campaign_activity_id The unique ID for the primary email campaign activity.
	 */
	public function delete(string $campaign_activity_id) : bool
		{

		return $this->doDelete(['campaign_activity_id' => $campaign_activity_id, ]);
		}
	}
