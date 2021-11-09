<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3;

class Email extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/emails/{campaign_id}');
		}


	/**
	 * GET Details About a Single Email Campaign
	 *
	 * Use this method to get details about a single email campaign and campaign
	 * related activities. Details include the email campaign name, current
	 * status, create date, last update date, and a list of campaign activities;
	 * including the `campaign_activity_id` and `role`.
	 *
	 * @param string $campaign_id The ID (UUID format) that uniquely identifies this email campaign.
	 */
	public function get(string $campaign_id) : array
		{
		return $this->doGet(['campaign_id' => $campaign_id, ]);
		}

	/**
	 * DELETE an Email Campaign
	 *
	 * Use this method to delete an email campaign and the email campaign activities
	 * associated with the email campaign. You cannot delete an email campaign
	 * when it has a `Scheduled` status.
	 * 
	 * Constant Contact users can restore deleted email campaigns using the
	 * UI.
	 * 
	 *
	 * @param string $campaign_id The unique ID for the email campaign you are deleting.
	 */
	public function delete(string $campaign_id) : bool
		{
		return $this->doDelete(['campaign_id' => $campaign_id, ]);
		}

	/**
	 * PATCH (Update) an Email Campaign Name
	 *
	 * Use this method to rename an email campaign. The name is not visible
	 * to contacts. The name must be unique and cannot exceed 80 characters.
	 * You cannot rename email campaigns that have a `Removed` status.
	 *
	 * @param string $campaign_id The unique identifier for an email campaign.
	 * @param \PHPFUI\ConstantContact\Definition\EmailCampaignName $body A JSON payload that contains the new email campaign name.
	 */
	public function patch(string $campaign_id, \PHPFUI\ConstantContact\Definition\EmailCampaignName $body) : array
		{
		return $this->doPatch(['campaign_id' => $campaign_id, 'body' => $body->getData(), ]);
		}
	}