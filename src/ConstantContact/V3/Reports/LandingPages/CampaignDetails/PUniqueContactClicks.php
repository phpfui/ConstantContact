<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\LandingPages\CampaignDetails;

class PUniqueContactClicks extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/landing_pages/campaign_details/{campaign_activity_id}/p_unique_contact_clicks');
		}

	/**
	 * GET a Unique Contacts Clicks Landing Page Report
	 *
	 * Use this method get details about each contact that clicked a link on
	 * a landing page campaign activity. Unique contact clicks are identified
	 * by both the `contact_id` and `url_id`. The same contact may appear more
	 * than once in the results, if they clicked more than one link on the
	 * landing page. The resulting contact data is listed with most recent
	 * activity first.
	 *
	 * @param string $campaign_activity_id The landing page `campaign_activity_id` (UUID's) to use to get unique contact click results.
	 * @param string $limit Use to limit the number of contact tracking activities to return on a single page. The default is `50` and the maximum is `500` per page.
	 * @param string $contacts_filter Use to filter the results to return only contacts that match a contacts full or partial first or last name, or email. For example: Josie or Jo.
	 */
	public function get(string $campaign_activity_id, ?string $limit = null, ?string $contacts_filter = null) : ?array
		{

		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, 'limit' => $limit, 'contacts_filter' => $contacts_filter, ]);
		}

	public function getTyped(string $campaign_activity_id, ?string $limit = null, ?string $contacts_filter = null) : ?\PHPFUI\ConstantContact\Definition\PContactClickTrackingActivitiesPage
		{
		$data = $this->get($campaign_activity_id, $limit, $contacts_filter);

		return $data ? new \PHPFUI\ConstantContact\Definition\PContactClickTrackingActivitiesPage($data) : null;
		}

	}
