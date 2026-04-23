<?php

// Generated file. Do not edit by hand. Use update.php in project root.

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
	 * Get details about a resend to non-openers campaign activity. If resend
	 * activity does not exist for the specified `campaign_activity_id`, an
	 * empty list is returned in the results. You can only create one resend
	 * activity per email campaign.
	 *
	 * @param string $campaign_activity_id The unique ID for the primary email campaign activity.
	 */
	public function get(string $campaign_activity_id) : ?array
		{

		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, ]);
		}
	/**
	 * @return ?array<\PHPFUI\ConstantContact\Definition\ResendToNonOpeners>
	 */
	public function getTyped(string $campaign_activity_id) : ?array
		{
		$data = $this->get($campaign_activity_id);
		if (is_null($data))
			{
			return null;
			}

		$array = [];
		foreach ($data as $object)
			{
			$array[] = new \PHPFUI\ConstantContact\Definition\ResendToNonOpeners($object);
			}

		return $array;
		}


	/**
	 * POST a Resend to Non-openers Campaign Activity
	 *
	 * Use this POST method to resend a primary campaign activity to contacts
	 * that did not open a campaign activity that has a current `status` of
	 * `Draft`, `Scheduled`, or `Done`. You can only create one resend activity
	 * per email campaign.
	 *
	 * After an email campaign activity is sent to contacts, Constant Contact
	 * waits the specified number of `delay_days` or `delay_minutes` (properties
	 * are mutually exclusive) before resending to non-openers. If you set
	 * both `delay_days` or `delay_minutes`, `delay_minutes` is ignored in
	 * the request. You can resend to non-openers a minimum of twelve hours
	 * (720 minutes) and a maximum of up to 10 days (or 10 x 1440 minutes)
	 * after the initial send date.
	 *
	 *
	 *
	 * @param string $campaign_activity_id The unique ID for the primary email campaign activity.
	 * @param \PHPFUI\ConstantContact\Definition\ResendToNonOpenersInput $resend_schedule A JSON request body that specifies when to resend the campaign activity to non-openers.
	 */
	public function post(string $campaign_activity_id, \PHPFUI\ConstantContact\Definition\ResendToNonOpenersInput $resend_schedule) : ?array
		{

		return $this->doPost(['campaign_activity_id' => $campaign_activity_id, 'resend_schedule' => $resend_schedule->getData(), ]);
		}

	public function postTyped(string $campaign_activity_id, \PHPFUI\ConstantContact\Definition\ResendToNonOpenersInput $resend_schedule) : ?\PHPFUI\ConstantContact\Definition\ResendToNonOpenersObject
		{
		$data = $this->post($campaign_activity_id, $resend_schedule);

		return $data ? new \PHPFUI\ConstantContact\Definition\ResendToNonOpenersObject($data) : null;
		}

	}
