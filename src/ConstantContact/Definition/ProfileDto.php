<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property bool $accessible Whether the profile is currently accessible for posting. Publishing a post will fail if its profile is not currently accessible. Only populated when the GET request includes the query parameter <code>include=accessible</code>.
 * @property \PHPFUI\ConstantContact\Definition\AccountInfoDto $account_info
 * @property bool $connected Whether this profile is currently connected. You can only create and publish posts with connected profiles.
 * @property string $handle The profile's handle on the social network (for example, an Instagram or TikTok username). May be <code>null</code> if the network does not expose a separate handle (for example, Facebook).
 * @property string $image_url URL of the profile's image or avatar.
 * @property string $name Display name of the profile.
 * @property string $network The social network this profile belongs to.
 * @property string $network_profile_id The social network-specific identifier for this profile.
 * @property string $network_user_id The social network-specific identifier for the user who owns this profile.
 * @property string $profile_id Unique identifier for this profile. Use this value in the <code>profile_id</code> field of a <code>ProfilePost</code> when creating a post.
 * @property \PHPFUI\ConstantContact\Definition\Settings $settings Network-specific settings for the profile. Only populated when the request includes <code>include=accessible</code> and settings are available for the network. Currently, only TikTok provides settings: <pre>"content": {
 * "comment_disabled": Boolean,
 * "duet_disabled": Boolean,
 * "stitch_disabled": Boolean,
 * "max_video_post_duration_sec": Integer
 * }</pre>
 * @property string $url URL to the profile on the social network.
 */
class ProfileDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'accessible' => 'bool',
		'account_info' => '\PHPFUI\ConstantContact\Definition\AccountInfoDto',
		'connected' => 'bool',
		'handle' => 'string',
		'image_url' => 'string',
		'name' => 'string',
		'network' => 'string',
		'network_profile_id' => 'string',
		'network_user_id' => 'string',
		'profile_id' => 'string',
		'settings' => '\PHPFUI\ConstantContact\Definition\Settings',
		'url' => 'string',

	];

	protected static array $requiredFields = [
		'connected',
		'network',
		'profile_id',

	];
	}
