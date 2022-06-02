<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Emails\Activities;

class NonOpenerResend extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/emails/activities/{campaign_activity_id}/non_opener_resends/{resend_request_id}');
		}

	/**
	 * DELETE a Resend to Non Openers Activity
	 *
	 * Use this `DELETE` method to delete (unschedule) a resend to non openers
	 * activity.
	 *
	 * @param string $campaign_activity_id The unique ID for the primary email campaign activity.
	 * @param string $resend_request_id The unique ID associated with the resend for the email campaign activity (for example: `389093`). If the email campaign activity is currently in draft status, specify `DRAFT` as the ID.
	 */
	public function delete(string $campaign_activity_id, string $resend_request_id) : bool
		{

		return $this->doDelete(['campaign_activity_id' => $campaign_activity_id, 'resend_request_id' => $resend_request_id, ]);
		}
	}
