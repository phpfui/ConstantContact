<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Social;

class Posts extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/social/posts');
		}

	/**
	 * POST (create) a social media post
	 *
	 * Creates a new social media post that can be published immediately or
	 * scheduled for later publication. A post can target one or more social
	 * profiles, and can include text, images, and network-specific settings.
	 *
	 *
	 * Set `status` to `DRAFT` to save without publishing, or `SCHEDULED` to
	 * schedule for publication. Scheduled posts require a `scheduled_time`
	 * in ISO-8601 format.
	 *
	 * Post content and settings can vary per profile — each `profile_posts`
	 * entry can have its own text, images, and network-specific settings (e.g.,
	 * TikTok-specific settings like `disable_comment`).
	 *
	 *
	 * @param \PHPFUI\ConstantContact\Definition\PostCreateDto $body The social post content and configuration.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\PostCreateDto $body) : ?array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}

	public function postTyped(\PHPFUI\ConstantContact\Definition\PostCreateDto $body) : ?\PHPFUI\ConstantContact\Definition\PostDto
		{
		$data = $this->post($body);

		return $data ? new \PHPFUI\ConstantContact\Definition\PostDto($data) : null;
		}
	}
