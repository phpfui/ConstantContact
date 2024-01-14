<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\LandingPages\CampaignDetails;

class PUniqueContactAdds extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_adds');
		}

	/**
	 * GET a Unique Contacts Adds Landing Page Report
	 *
	 * Use this method to get details about each contact added to the account
	 * from a specified landing page. Contacts are identified by `contact_id`.
	 * The resulting contact data is listed with most recent activity first.
	 *
	 *
	 * @param string $campaign_activity_id The landing page `campaign_activity_id` (UUID's) to use to get unique contact results.
	 * @param string $limit Use to limit the number of contact tracking activities to return on a single page. The default is `50` and the maximum is `500` per page.
	 * @param string $contacts_filter Use to filter the results to only include contacts that contain a certain value. This parameter does full and partial matches and applies to the contact first name, last name, and email fields. For example: Josie or Jo.
	 */
	public function get(string $campaign_activity_id, ?string $limit = null, ?string $contacts_filter = null) : array
		{

		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, 'limit' => $limit, 'contacts_filter' => $contacts_filter, ]);
		}
	}
