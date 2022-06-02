<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Reports\ContactReports;

class ActivityDetails extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/reports/contact_reports/{contact_id}/activity_details');
		}

	/**
	 * GET Contact Activity Details
	 *
	 * <p>Gets the tracking activity data for a given account and contact,
	 * sorted in descending activity date order.</p><p>One or more tracking
	 * activity types can be returned in a single request.</p><table><tr><td
	 * colspan='2'>Valid tracking activity types</td></tr><tr><td><b>em_sends</b></td><td>Send
	 * activities</td></tr><tr><td><b>em_opens</b></td><td>Email open tracking
	 * activities</td></tr><tr><td><b>em_clicks</b></td><td>Link click-through
	 * tracking activities</td></tr><tr><td><b>em_bounces</b></td><td>Bounce
	 * tracking activities</td></tr><tr><td><b>em_optouts</b></td><td>Opt-out
	 * tracking activities</td></tr><tr><td><b>em_forwards</b></td><td>Forward
	 * to a friend tracking activities</td></tr></table>
	 *
	 * @param string $contact_id The contact id which is requesting tracking activity data.
	 * @param string $tracking_activities_list The tracking activities list contains the tracking activity types to be specified as part of each request. The tracking activities list is a comma-delimited string containing one ore more tracking activity types. (such as em_sends, em_opens, em_forwards)
	 * @param string $limit The number of tracking activities to return in a single page. Valid values are 1 to 100. Default is 100.
	 */
	public function get(string $contact_id, string $tracking_activities_list, ?string $limit = null) : array
		{

		return $this->doGet(['contact_id' => $contact_id, 'tracking_activities_list' => $tracking_activities_list, 'limit' => $limit, ]);
		}
	}
