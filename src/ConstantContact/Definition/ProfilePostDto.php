<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\ImageDto> $images
 * @property array<\PHPFUI\ConstantContact\Definition\LinkDto> $links
 * @property string $post_content_id Although this is optional, it <em>should</em> be included when updating a post.
 * @property array<\PHPFUI\ConstantContact\Definition\ProfilePostProfileDto> $profiles This can be an empty list, as long as the post is in DRAFT status.
 * @property \PHPFUI\ConstantContact\Definition\Settings $settings Network-specific post settings. If no settings are provided, this field will be omitted in the JSON response.

All values will be persisted as <code>string</code>s.

Currently, only TikTok has the following available settings:
Example:
<pre>{
	"settings": {
		"tiktok": {
			"disable_comment": "true",
			"disable_duet": "false",
			"disable_stitch": "true",
			"auto_add_music": "false"
		}
	}
}</pre>
 * @property string $text The requirement of text content depends on the network being posted to. In DRAFT status, this is always optional.
 * @property array<\PHPFUI\ConstantContact\Definition\VideoDto> $videos videos to be included in the post. Note that the presence of images, videos, and link previews in a post are mutually exclusive. Also note that currently, only a single video is supported.
 */
class ProfilePostDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'images' => 'array<\PHPFUI\ConstantContact\Definition\ImageDto>',
		'links' => 'array<\PHPFUI\ConstantContact\Definition\LinkDto>',
		'post_content_id' => 'string',
		'profiles' => 'array<\PHPFUI\ConstantContact\Definition\ProfilePostProfileDto>',
		'settings' => '\PHPFUI\ConstantContact\Definition\Settings',
		'text' => 'string',
		'videos' => 'array<\PHPFUI\ConstantContact\Definition\VideoDto>',

	];
	}
