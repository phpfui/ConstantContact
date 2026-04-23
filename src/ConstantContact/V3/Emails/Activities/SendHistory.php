<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Emails\Activities;

class SendHistory extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/emails/activities/{campaign_activity_id}/send_history');
		}

	/**
	 * GET the Send History of an Email Campaign Activity
	 *
	 * Use this method to return the send history of an email campaign activity.
	 * This method returns the send history as an array containing an object
	 * for each time you sent a specific email campaign activity to contacts.
	 *
	 *
	 * Each send history object contains the email campaign activity send date,
	 * the number of contacts it was sent to, and the contact lists or segments
	 * used to send it. Each send history object also includes if the send
	 * attempt completed or encountered an error, and the reason why each error
	 * occurred. This method returns results in ascending order starting with
	 * the first send attempt.
	 *
	 * If the email campaign activity has not been sent to contacts, this method
	 * returns a 200 response and an empty array.
	 *
	 *
	 * @param string $campaign_activity_id The unique ID for an email campaign activity. You can return the send history for `primary_email` and `resend` role email campaign activities.
	 */
	public function get(string $campaign_activity_id) : ?array
		{

		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, ]);
		}
	/**
	 * @return ?array<\PHPFUI\ConstantContact\Definition\EmailSendHistory>
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
			$array[] = new \PHPFUI\ConstantContact\Definition\EmailSendHistory($object);
			}

		return $array;
		}

	}
