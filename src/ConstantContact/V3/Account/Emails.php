<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Account;

class Emails extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/account/emails');
		}


	/**
	 * GET a Collection of Account Email Addresses
	 *
	 * Use this method to return a collection of email addresses for the account
	 * associated with your access token. When you <a href="https://v3.developer.constantcontact.com/api_reference/index.html#!/Email_Campaigns/createEmailCampaignUsingPOST"
	 * target="_blank">Create an Email Campaign<a/>, you must use an account
	 * email address with a `CONFIRMED` status in the email campaign `from_email`
	 * and `reply_to_email` headers.
	 * 
	 * 
	 * Use the query parameters to filter results. You can filter using `confirm_status`,
	 * `role_code`, or `email_address`. For example, searching with `confirm_status=CONFIRMED`
	 * returns all confirmed email addresses in the account. This method only
	 * supports one query parameter at a time.
	 * 
	 *
	 * @param string $confirm_status Use the `confirm_status` query parameter to search for account emails using the email status. Possible values are `CONFIRMED` or `UNCONFIRMED`. You can also abbreviate the values of this query parameter and use `C` or `U`.

	 * @param string $role_code Use the `role_code` query parameter to search for account emails that have a specific role. Each each email address in an account can have multiple roles or no role. Possible values are `CONTACT`, `BILLING`, `REPLY_TO`, `JOURNALING`, or `OTHER`. You can also abbreviate the value of this query parameter and use `C`,`B`,`R`,`J`, or `O`.
	 * @param string $email_address Use the `email_address` query parameter to search for a specific account email address.
	 */
	public function get(?string $confirm_status = null, ?string $role_code = null, ?string $email_address = null) : array
		{
		if (null !== $confirm_status)
			{
			$validValues = ['CONFIRMED' , 'C' , 'UNCONFIRMED' , 'U'];
			if (! in_array($confirm_status, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter confirm_status with value '{$confirm_status}' is not one of (" . implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}
		if (null !== $role_code)
			{
			$validValues = ['CONTACT' , 'C' , 'BILLING' , 'B' , 'JOURNALING' , 'J' , 'REPLY_TO' , 'R' , 'OTHER' , 'O'];
			if (! in_array($role_code, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter role_code with value '{$role_code}' is not one of (" . implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}
		return $this->doGet(['confirm_status' => $confirm_status, 'role_code' => $role_code, 'email_address' => $email_address, ]);
		}

	/**
	 * POST Add an Account Email Address
	 *
	 * Use this method to add a new email address to a Constant Contact account.
	 * If the email address you are adding already exists in the account the
	 * API will return a 409 conflict error.
	 * 
	 * When you add a new email address to an account, Constant Contact automatically
	 * sends an email to that address with a link to confirm it. After a user
	 * clicks that link, the account email status changes from `UNCONFIRMED`
	 * to `CONFIRMED`. You can use confirmed account email addresses in the
	 * email campaign `from_email` and `reply_to_email` headers. For more use
	 * case information, see [Add an Account Email Address](/api_guide/account_post_emails.html)
	 * in the API guide.
	 * 
	 *
	 * @param PHPFUI\ConstantContact\Definition\AccountEmailInput $body A JSON request payload containing the new email address you want to add to the Constant Contact account.
	 */
	public function post(PHPFUI\ConstantContact\Definition\AccountEmailInput $body) : array
		{
		return $this->doPost(['body' => $body, ]);
		}
	}