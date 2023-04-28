<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Emails\Activities;

class Schedules extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/emails/activities/{campaign_activity_id}/schedules');
		}

	/**
	 * DELETE an Email Campaign Activity Schedule
	 *
	 * Use this method to unschedule an email campaign activity by deleting
	 * the schedule. You can only unschedule email campaign activities that
	 * are in `SCHEDULED` status. Unscheduling reverts the email campaign activity
	 * to the status prior to `SCHEDULED`.
	 *
	 * @param string $campaign_activity_id The unique ID for an email campaign activity.
	 */
	public function delete(string $campaign_activity_id) : bool
		{

		return $this->doDelete(['campaign_activity_id' => $campaign_activity_id, ]);
		}

	/**
	 * GET an Email Campaign Activity Schedule
	 *
	 * Use this method to return the current schedule for an email campaign
	 * activity. This schedule contains the date that Constant Contact will
	 * send the email campaign activity to contacts. If the email campaign
	 * activity is not in `SCHEDULED` status, this method returns an empty
	 * array and a 200 response code.
	 *
	 * @param string $campaign_activity_id The unique ID for an email campaign activity.
	 */
	public function get(string $campaign_activity_id) : array
		{

		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, ]);
		}

	/**
	 * POST (Create) an Email Campaign Activity Schedule
	 *
	 * Use this method to schedule when Constant Contact will send an email
	 * campaign activity to contacts. Use the `scheduled_date` request body
	 * property to enter the ISO-8601 format date that you want Constant Contact
	 * to send the email campaign activity on.
	 *
	 * Before you schedule an email campaign activity, you must update the
	 * email campaign activity and specify which contacts you want Constant
	 * Contact to send the email to. When you make a PUT call to update an
	 * email campaign activity, use the `contact_list_ids` or `segment_ids`
	 * array to add contacts.
	 *
	 * You can only schedule email campaign activities that have the `primary_email`
	 * role and are in `DRAFT`, `DONE`, or `ERROR` status. When you schedule
	 * an email campaign activity in `DONE` status, Constant Contact does not
	 * send the email campaign activity to contacts that already received it.
	 * Constant Contact only sends the email campaign activity to any new contacts
	 * in the contact lists or segment you use.
	 *
	 *
	 * @param string $campaign_activity_id The unique ID for an email campaign activity. You can only schedule email campaign activities that have the `primary_email` role.
	 * @param \PHPFUI\ConstantContact\Definition\EmailScheduleInput $body A request body payload that contains the date that you want Constant Contact to send your email campaign activity on. Use `"0"` as the date to have Constant Contact immediately send the email campaign activity.
	 */
	public function post(string $campaign_activity_id, \PHPFUI\ConstantContact\Definition\EmailScheduleInput $body) : array
		{

		return $this->doPost(['campaign_activity_id' => $campaign_activity_id, 'body' => $body->getData(), ]);
		}
	}
