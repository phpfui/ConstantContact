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
	 * <p>Gets the tracking activity data for a single contact, sorted in descending
	 * activity date order.</p> <p>You must chose either the `tracking_activities_list`
	 * query parameter and or the `tracking_activity_type` query parameter
	 * to specify one or more tracking activity types In the request. The `tracking_activities_list`
	 *  and `tracking_activities_type` query parameters are mutually exclusive.</p>
	 *
	 * <table><tr><td colspan='2'>Valid tracking activity types</td></tr>
	 * <tr><td><b>em_sends</b></td><td>Send activities</td></tr>
	 * <tr><td><b>em_opens</b></td><td>Email open tracking activities</td></tr>
	 *
	 * <tr><td><b>em_clicks</b></td><td>Link click-through tracking activities</td></tr>
	 *
	 * <tr><td><b>em_bounces</b></td><td>Bounce tracking activities</td></tr>
	 *
	 * <tr><td><b>em_optouts</b></td><td>Opt-out tracking activities</td></tr><tr>
	 *
	 * <td><b>em_forwards</b></td><td>Forward to a friend tracking activities</td></tr>
	 *
	 * <tr><td><b>p_contact_open</b></td><td>Landing page opens</td></tr>
	 * <tr><td><b>p_contact_click</b></td><td>Landing page clicks</td></tr>
	 *
	 * <tr><td><b>p_contact_add</b></td><td>Landing page adds</td></tr>
	 * <tr><td><b>p_contact_update </b></td><td> Landing page updates</td></tr>
	 *
	 * </table>
	 *
	 * @param string $contact_id The contact's ID for which tracking activity data is requested.
	 * @param string $tracking_activities_list Specify one or more tracking activity types to include as a comma-delimited string. The `tracking_activities_list`  and `tracking_activities_type` query parameters are mutually exclusive.
	 * @param array $tracking_activity_type Specify one or more tracking activity types to include as an array. The `tracking_activities_list`  and `tracking_activities_type` query parameters are mutually exclusive.
	 * @param bool $include_campaign_activity_names Default (`true`) returns campaign activity names in the results. Not including campaign activity names in the results (`false`), is more efficient.
	 * @param string $limit The number of tracking activities to return in a single page. Valid values are 1 to 100. Default is 100.
	 */
	public function get(string $contact_id, ?string $tracking_activities_list = null, ?array $tracking_activity_type = null, ?bool $include_campaign_activity_names = null, ?string $limit = null) : array
		{

		return $this->doGet(['contact_id' => $contact_id, 'tracking_activities_list' => $tracking_activities_list, 'tracking_activity_type' => $tracking_activity_type, 'include_campaign_activity_names' => $include_campaign_activity_names, 'limit' => $limit, ]);
		}
	}
