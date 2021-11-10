<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3;

class Emails extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/emails');
		}


	/**
	 * GET a Collection of Email Campaigns
	 *
	 * Use this method to list and get details about your email campaigns.
	 * By default, this method returns all email campaigns for the user account
	 * including deleted email campaigns. To get email campaigns within a date-range,
	 * use the `after_date` and `before_date` query parameters.
	 * 
	 * This endpoint does not return campaign activity details for each email
	 * campaign in the collection. To get email campaign activity details for
	 * a single email campaign, use the GET `/emails/{campaign_id}` endpoint."
	 *
	 * <div class="Msg"><p class="note-text">This method does not currently
	 * support filtering results using the email campaign creation date.</p></div>
	 *
	 * 
	 *
	 * @param int $limit Specifies the number of campaigns to display on each page of output that is returned (from return 1 - 500). The default returns 50 campaigns per page.
	 * @param string $before_date Use to return email campaigns with `updated_at` timestamps that are before a specific date and time (in ISO-8601 format). Use with the `after_date` query parameter to get email campaigns sent within a specific date range.
	 * @param string $after_date Use to return email campaigns with last `updated_at` timestamps that are after a specific date and time (in ISO-8601 format). Use with the `before_date` query parameter to get email campaigns sent within a specific date range.
	 */
	public function get(?int $limit = null, ?string $before_date = null, ?string $after_date = null) : array
		{
		return $this->doGet(['limit' => $limit, 'before_date' => $before_date, 'after_date' => $after_date, ]);
		}

	/**
	 * POST (Create) a New Email Campaign
	 *
	 * Use this method to create a new email campaign. This method also creates
	 * new `primary_email` and `permalink` email campaign activities and associates
	 * them with the new email campaign.
	 * 
	 * The request body must contain the `name` property and the `email_campaign_activities`
	 * array. The `email_campaign_activities` array contains the main content
	 * of your email campaign using the required properties `format_type`,
	 * `from_name`, `from_email`, `reply_to_email`, `subject`, and `html_content`.
	 *
	 * 
	 *
	 * @param \PHPFUI\ConstantContact\Definition\EmailCampaignComplete $body A JSON request body that contains the email content.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\EmailCampaignComplete $body) : array
		{
		return $this->doPost(['body' => $body->getData(), ]);
		}
	}