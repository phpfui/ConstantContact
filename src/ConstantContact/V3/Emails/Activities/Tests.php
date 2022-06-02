<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Emails\Activities;

class Tests extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/emails/activities/{campaign_activity_id}/tests');
		}

	/**
	 * POST Test Send an Email Campaign Activity
	 *
	 * Use this method to send a test email to specific email addresses. Test
	 * emails allow you to verify how the email campaign activity will look
	 * before you send it to contacts. This method uses the `email_addresses`
	 * array in the request body to determine the recipients of the test email.
	 * The test email does not process any dynamic content in the email campaign
	 * activity. Dynamic content includes contact and custom field variables.
	 *
	 *
	 * You can send up to 50 test emails each day. Each recipient you add to
	 * the `email_addresses` array in the request body counts towards this
	 * limit. Successfully sending a test email returns a 204 response code
	 * without a response body.
	 *
	 *
	 * @param string $campaign_activity_id The unique ID for an email campaign activity. You can only test send email campaign activities that have the `primary_email` role.
	 * @param \PHPFUI\ConstantContact\Definition\EmailTestSendInput $email_test_send_input A JSON request body that contains the recipients of the test email and an optional personal message.
	 */
	public function post(string $campaign_activity_id, \PHPFUI\ConstantContact\Definition\EmailTestSendInput $email_test_send_input) : array
		{

		return $this->doPost(['campaign_activity_id' => $campaign_activity_id, 'email_test_send_input' => $email_test_send_input->getData(), ]);
		}
	}
