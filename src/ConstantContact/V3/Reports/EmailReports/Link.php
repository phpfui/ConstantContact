<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\EmailReports;

class Link extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/email_reports/{campaign_activity_id}/links');
		}

	/**
	 * GET an Email Links Report
	 *
	 * Use this method to return the number of unique contacts that clicked
	 * each link in an email campaign activity and the type of action associated
	 * with clicking each link. You can return reporting data for `primary_email`
	 * and `resend` role email campaign activities. For more use case information,
	 * see [Get an Email Links Report](https://v3.developer.constantcontact.com/api_guide/email_links_report.html)
	 * in the API guide.
	 *
	 * @param string $campaign_activity_id The unique ID for an email campaign activity.
	 */
	public function get(string $campaign_activity_id) : array
		{

		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, ]);
		}
	}
