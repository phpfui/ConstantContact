<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $name Campaign name for this post. Optional on creation. If not provided, a default name will be generated. The value provided will be sanitized before saving, so the value returned may not exactly match what was sent.
 * @property array<\PHPFUI\ConstantContact\Definition\ProfilePostDto> $profile_posts The list of per-profile posts that make up this campaign. Each entry specifies the content to post and the profiles to post it to.
 * @property string $scheduled_time The date and time to publish the post, in ISO-8601 format. Only applies when <code>status</code> is <code>SCHEDULED</code>. If not specified for a scheduled post, the publish job is scheduled to execute immediately.
 * @property string $status The status of the post on creation. Valid values are <code>DRAFT</code> (save without publishing) or <code>SCHEDULED</code> (schedule for publication).
 */
class PostCreateDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'name' => 'string',
		'profile_posts' => 'array<\PHPFUI\ConstantContact\Definition\ProfilePostDto>',
		'scheduled_time' => 'string',
		'status' => 'string',

	];

	protected static array $requiredFields = [
		'profile_posts',
		'status',

	];
	}
