<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\EmailReports\Tracking;

class Bounces extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/email_reports/{campaign_activity_id}/tracking/bounces');
		}

	/**
	 * GET an Email Bounces Report
	 *
	 * Use this method to get a report listing contact bounce data for the
	 * specified email campaign activity. This report lists the most recent
	 * bounce data first and includes contact information, such as the contact's
	 * email address, unique ID, and the email bounce date and time.
	 * Use the <code>bounce_code</code> query parameter to limit the type of
	 * bounce data to return.
	 *
	 * For more use case information, see [Get a Bounces Report for an Email
	 * Campaign Activity](https://v3.developer.constantcontact.com/api_guide/email_summary_bounces_report.html)
	 * in the API guide.
	 *
	 * @param string $campaign_activity_id The ID that uniquely identifies the email campaign activity to use for this report.
	 * @param array $bounce_code To return results for a specific bounce code, select the `bounce_code` from the drop-down list. To return results for multiple codes, repeat the bounce code parameter for each. For example, to return results for bounce codes `B` and `D` use `bounce_code=B&bounce_code=D`.
	 * @param string $limit The number of tracking activities to return on a page.
	 */
	public function get(string $campaign_activity_id, ?array $bounce_code = null, ?string $limit = null) : array
		{

		return $this->doGet(['campaign_activity_id' => $campaign_activity_id, 'bounce_code' => $bounce_code, 'limit' => $limit, ]);
		}
	}
