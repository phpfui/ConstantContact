<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Emails;

class CampaignIdXrefs extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/emails/campaign_id_xrefs');
		}


	/**
	 * GET a Collection of V2 and V3 API Email Campaign Identifiers
	 *
	 * <div class="Msg Msg--warning"><p class="note-text">Use this endpoint
	 * to migrate your locally stored V2 email campaign data to the new V3
	 * format. Developers are expected to use this endpoint sparingly. This
	 * endpoint is NOT intended for regular or repeated use. Constant Contact
	 * will eventually deprecate and remove this endpoint.</p></div>
	 * 
	 * Use this method to migrate your local V2 API email data to the V3 API
	 * format. For each value that you provide in the `v2_email_campaign_ids`
	 * query parameter, this method returns the corresponding V3 `campaign_id`
	 * and V3 `campaign_activity_id` UUID value. For more information on the
	 * changes to the email campaign resource model, see [V3 Email Campaign
	 * Resource Changes](https://v3.developer.constantcontact.com/api_guide/v3_v2_email_campaign_deltas.html)
	 * in the API guide.
	 * 
	 *
	 * @param string $v2_email_campaign_ids Comma separated list of V2 API `campaignId` values. You can enter up to 50 V2 `campaignId` values in each request.
	 */
	public function get(string $v2_email_campaign_ids) : array
		{
		return $this->doGet(['v2_email_campaign_ids' => $v2_email_campaign_ids, ]);
		}
	}