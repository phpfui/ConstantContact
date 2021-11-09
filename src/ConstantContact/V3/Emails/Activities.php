<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Emails;

class Activities extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/emails/activities/{campaign_activity_id}');
		}


	/**
	 * GET a Single Email Campaign Activity
	 *
	 * Use this method to return a specific email campaign activity. Each email
	 * campaign activity contains the email content, metadata, and styling
	 * information of an email. Email campaign activities can also contain
	 * either contact lists or segments. Constant Contact uses this information
	 * to determine who to send the email campaign activity to when you schedule
	 * it. You cannot get email campaign activities that have a `REMOVED` status.
	 *
	 * 
	 *
	 * @param string $campaign_activity_id The unique ID for an email campaign activity.
	 * @param string $include Use the `include` query parameter to enter a comma separated list of additional email campaign activity properties for the V3 API to return. Valid values are `physical_address_in_footer`, `permalink_url`, `html_content`, and `document_properties`.
	 */
	public function get(string $campaign_activity_id, ?string $include = null) : array
		{
		if (null !== $include)
			{
			$parts = explode(',', $include);
			$validValues = ['physical_address_in_footer' , 'permalink_url' , 'html_content' , 'document_properties'];
			foreach ($parts as $part)
				{
				if (! in_array(trim($part), $validValues))
					{
					throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter include containing value '{$part}' is not one of (" . implode(', ', $validValues) . ') in ' . __METHOD__);
					}
				}
			}
		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, 'include' => $include, ]);
		}

	/**
	 * PUT (Update) An Email Campaign Activity
	 *
	 * Use this method to update an email campaign activity by including the
	 * complete email campaign activity with your changes in the request body.
	 * The request body requires the `from_name`, `from_email`, `reply_to_email`,
	 * and `subject` properties.
	 * 
	 * You can only update email campaign activities that have the `primary_email`
	 * role and that are in `DRAFT` or `Done` status.
	 * When you use a PUT method to update a resource, the V3 API overwrites
	 * any properties that are missing in the request body. However, the V3
	 * API does not overwrite subresources that you omit in the request body
	 * or missing properties in subresources. This method considers `physical_address_in_footer`,
	 * `document_properties`, `html_content`, and `permalink_url` subresources
	 * of the email campaign activity.
	 * 
	 *
	 * @param string $campaign_activity_id The unique ID for the email campaign activity you are updating.
	 * @param \PHPFUI\ConstantContact\Definition\EmailCampaignActivity $body A request body payload that contains the complete email campaign activity with your changes.
	 */
	public function put(string $campaign_activity_id, \PHPFUI\ConstantContact\Definition\EmailCampaignActivity $body) : array
		{
		return $this->doPut(['campaign_activity_id' => $campaign_activity_id, 'body' => $body->getData(), ]);
		}
	}