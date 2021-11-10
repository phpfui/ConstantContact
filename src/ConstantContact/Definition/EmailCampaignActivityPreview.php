<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $campaign_activity_id The unique ID for an email campaign activity.
	 * @var string $from_email The "from email" email header for the email campaign activity.
	 * @var string $from_name The "from name" email header for the email campaign activity.
	 * @var string $preheader The email preheader for the email campaign activity. Only <code>format_type</code> 3, 4, and 5 email campaign activities use the preheader property.
	 * @var string $preview_html_content An HTML preview of the email campaign activity.
	 * @var string $preview_text_content A plain text preview of the email campaign activity.
	 * @var string $reply_to_email The email "Reply To Email" field for the email campaign activity.
	 * @var string $subject The email "Subject" field for the email campaign activity.
	 */

class EmailCampaignActivityPreview extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'campaign_activity_id' => 'string',
		'from_email' => 'string',
		'from_name' => 'string',
		'preheader' => 'string',
		'preview_html_content' => 'string',
		'preview_text_content' => 'string',
		'reply_to_email' => 'string',
		'subject' => 'string',

	];
	}