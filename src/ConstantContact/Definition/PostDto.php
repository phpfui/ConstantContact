<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $campaign_id The campaign Id for this post. When creating a post, if this is not specified, a new campaign object will be created. If <code>campaign_id</code> is specified, then it must be the id of an existing campaign for the specified <code>accountId</code>, and that campaign <em>must</em> be in <code>PLACEHOLDER</code> status, and <em>must</em> be of <code>SOCIAL_POSTS</code> type, otherwise the request will fail
 * @property \PHPFUI\ConstantContact\Definition\CampaignProperties $campaign_properties Additional campaign properties associated to a social post.This is only honored at post create time and not available to be updated.
 * @property string $marketing_plan_id The UUID of the marketing plan that this post is associated with.This is only honored at post create time and not available to be updated.
 * @property string $name The name of the post campaign. If not provided during creation, a default campaign name will be used. When creating or updating the post, this value will be sanitized to be appropriate for campaign-api, and the value returned may not match what was sent.
 * @property array<\PHPFUI\ConstantContact\Definition\ProfilePostDto> $profile_posts
 * @property string $scheduled_time The date and time to publish the post in ISO-8601 format. For example, 2026-03-15T14:30:00.000Z. If not specified, the publish job is scheduled to execute immediately.
 * @property array $shared_campaign_ids The ids of campaigns which this social post is shared from. Expected at this time to be null or list of one. Only honored at post create time and not available to be updated.
 * @property string $status The status of the post. For create requests, only DRAFT and SCHEDULED are valid.
 */
class PostDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'campaign_id' => 'string',
		'campaign_properties' => '\PHPFUI\ConstantContact\Definition\CampaignProperties',
		'marketing_plan_id' => 'string',
		'name' => 'string',
		'profile_posts' => 'array<\PHPFUI\ConstantContact\Definition\ProfilePostDto>',
		'scheduled_time' => 'string',
		'shared_campaign_ids' => 'array',
		'status' => 'string',

	];
	}
