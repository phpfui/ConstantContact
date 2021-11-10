<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var \PHPFUI\ConstantContact\UUID $campaign_activity_id The unique ID for an email campaign activity.
	 * @var array[\PHPFUI\ConstantContact\Definition\EmailLinkClickCount] $link_click_counts An array of objects that contain the contact click count and link metadata for each unique link URL in an email campaign activity. By default, this method combines results for duplicate link URLs.
	 */

class EmailLinks extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'campaign_activity_id' => '\PHPFUI\ConstantContact\UUID',
		'link_click_counts' => 'array[\PHPFUI\ConstantContact\Definition\EmailLinkClickCount]',

	];
	}