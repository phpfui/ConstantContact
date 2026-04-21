<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $account_username The human-readable name of the account-owner of this profile
 * @property string $campaign_activity_id the post's campaign activity id. This maps both to the activity in campaign-api and the post entity in the social-reach-svc database. Although it is optional, it <em>should</em> be included when updating a post
 * @property string $campaign_activity_status the status of the post activity
 * @property \PHPFUI\ConstantContact\DateTime $campaign_activity_status_date The activity's date. If the activity is <code>SCHEDULED</code>, this will typically be the same as the scheduled date, if set. Otherwise, it is the last-modified timestamp
 * @property string $campaign_activity_status_message A human-readable message related to the current status of the post activity. This could be a generic message set by social-reach-svc or a specific, detailed message reported by the social network
 * @property string $image_url the url for the profile's image. This image can sometimes become stale, and is only refreshed when getting profiles with <code>include=accessible</code>
 * @property string $network The social network this profile belongs to
 * @property string $network_post_id the social network's reference for this post. Only set/valid if the status is <code>DONE</code>.
 * @property string $post_url the permalink url to the post on the social network. This is only set/valid if the status is <code>DONE</code>.
 * @property string $profile_id
 * @property string $profile_name
 */
class ProfilePostProfileDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'account_username' => 'string',
		'campaign_activity_id' => 'string',
		'campaign_activity_status' => 'string',
		'campaign_activity_status_date' => '\PHPFUI\ConstantContact\DateTime',
		'campaign_activity_status_message' => 'string',
		'image_url' => 'string',
		'network' => 'string',
		'network_post_id' => 'string',
		'post_url' => 'string',
		'profile_id' => 'string',
		'profile_name' => 'string',

	];
	}
