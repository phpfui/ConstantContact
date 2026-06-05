<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Contacts;

class SmsEngagementHistory extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contacts/sms_engagement_history/{contact_id}');
		}

	/**
	 * GET SMS Engagement History for a Contact
	 *
	 * Use this method to return SMS engagement details for a contact, such
	 * as SMS consent and advertising frequency details.
	 *
	 * @param string $contact_id The contact's unique ID.
	 */
	public function get(string $contact_id) : ?array
		{

		return $this->doGet(['contact_id' => $contact_id, ]);
		}
	/**
	 * @return ?array<\PHPFUI\ConstantContact\Definition\SmsEngagementHistory>
	 */
	public function getTyped(string $contact_id) : ?array
		{
		$data = $this->get($contact_id);
		if (is_null($data))
			{
			return null;
			}

		$array = [];
		foreach ($data as $object)
			{
			$array[] = new \PHPFUI\ConstantContact\Definition\SmsEngagementHistory($object);
			}

		return $array;
		}

	}
