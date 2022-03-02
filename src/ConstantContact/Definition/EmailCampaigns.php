<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var string $campaign_id The unique ID used to identify the email campaign (UUID format).
 * @var \PHPFUI\ConstantContact\DateTime $created_at The system generated date and time that this email campaign was created. This string is readonly and is in ISO-8601 format.
 * @var string $current_status The current status of the email campaign. Valid values are: <ul>
 * <li>Draft — An email campaign that you have created but have not sent to contacts.</li>
 * <li>Scheduled — An email campaign that you have scheduled for Constant Contact to send to contacts.</li>
 * <li>Executing — An email campaign that Constant Contact is currently sending to contacts. Email campaign activities are only in this status briefly.</li>
 * <li>Done — An email campaign that you successfully sent to contacts.</li>
 * <li>Error — An email campaign activity that encountered an error.</li>
 * <li>Removed — An email campaign that a user deleted. Users can view and restore deleted emails through the UI.</li> * </ul>
 * @var string $name The descriptive name the user provides to identify this campaign. Campaign names must be unique for each account ID.
 * @var string $type Identifies the type of campaign that you select when creating the campaign. Newsletter and Custom Code email campaigns are the primary types.
 * @var int $type_code The code used to identify the email campaign `type`. <ul>
 * <li> 1  (Default) </li>
 * <li> 2  (Bulk Email) </li>
 * <li> 10 (Newsletter) </li>
 * <li> 11 (Announcement) </li>
 * <li> 12 (Product/Service News) </li>
 * <li> 14 (Business Letter) </li>
 * <li> 15 (Card) </li>
 * <li> 16 (Press release)</li>
 * <li> 17 (Flyer) </li>
 * <li> 18 (Feedback Request) </li>
 * <li> 19 (Ratings and Reviews) </li>
 * <li> 20 (Event Announcement) </li>
 * <li> 21 (Simple Coupon) </li>
 * <li> 22 (Sale Promotion) </li>
 * <li> 23 (Product Promotion) </li>
 * <li> 24 (Membership Drive) </li>
 * <li> 25 (Fundraiser) </li>
 * <li> 26 (Custom Code Email)</li>
 * <li> 57 (A/B Test)</li> * </ul>
 * @var \PHPFUI\ConstantContact\DateTime $updated_at The system generated date and time showing when the campaign was last updated. This string is read only and is in ISO-8601 format.
 */
class EmailCampaigns extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'campaign_id' => 'string',
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'current_status' => ['Draft', 'Scheduled', 'Executing', 'Done', 'Error', 'Removed'],
		'name' => 'string',
		'type' => ['Newsletter', 'Custom Code Email', 'Announcement', 'Product/Service News', 'Business Letter', 'Card', 'Press release', 'Flyer', 'Feedback Request', 'Ratings and Reviews', 'Event Announcement', 'Simple Coupon', 'Sale Promotion', 'Product Promotion', 'Membership Drive', 'Fundraiser'],
		'type_code' => 'int',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',

	];

	protected static array $maxLength = [
		'name' => 80,

	];
	}
