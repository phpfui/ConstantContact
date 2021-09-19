<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Emails\Activities;

class Previews extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/emails/activities/{campaign_activity_id}/previews');
		}


	/**
	 * GET the HTML Preview of an Email Campaign Activity
	 *
	 * Use this method to get the HTML preview of an email campaign activity.
	 * The HTML preview allows you to verify how the email campaign activity
	 * will look before you send it to contacts.
	 * 
	 * Custom code emails (`format_type` 5) use the Constant Contact account
	 * owner's contact information to process contact, custom field, and account
	 * variables in the preview.
	 * 
	 * This method returns the HTML preview encoded as a JSON string. You will
	 * need to decode the string before you can use it as valid HTML.
	 * 
	 *
	 * @param string $campaign_activity_id The unique ID for an email campaign activity.
	 */
	public function get(string $campaign_activity_id) : array
		{
		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, ]);
		}
	}