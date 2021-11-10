<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var int $format_type The email format you are using to create the email campaign activity. The V3 API supports creating emails using <code>format_type</code> 5 (custom code emails).
 * @var string $from_name The email sender's name to display for the email campaign activity.
 * @var string $from_email The sender's email address to use for the email campaign activity. You must use a confirmed Constant Contact account email address. Make a GET call to <code>/account/emails</code> to return a collection of account emails and their confirmation status.
 * @var string $reply_to_email The sender's email address to use if the contact replies to the email campaign activity. You must use a confirmed Constant Contact account email address. Make a GET call to <code>/account/emails</code> to return a collection of account emails and their confirmation status.
 * @var string $subject The text to display in the subject line that describes the email campaign activity.
 * @var string $preheader The email preheader for the email campaign activity. Contacts will view your preheader as a short summary that follows the subject line in their email client. Only <code>format_type</code> 3, 4, and 5 email campaign activities use the preheader property.
 * @var string $html_content The HTML content for the email campaign activity. Only <code>format_type</code> 5 (custom code emails) can contain <code>html_content</code>. When creating a <code>format_type</code> 5 custom code email, make sure that you include <code>[[trackingImage]]</code> in the <code>&lt;body&gt;</code> element of your HTML.
 * @var \PHPFUI\ConstantContact\Definition\EmailPhysicalAddress $physical_address_in_footer The physical address for the organization that is sending the email campaign. Constant Contact displays this information to contacts in the email message footer. If you do not include a physical address in the email campaign activity, Constant Contact will use the physical address information saved for the Constant Contact user account.
 */
class EmailCampaignActivityInput extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'format_type' => [5],
		'from_name' => 'string',
		'from_email' => 'string',
		'reply_to_email' => 'string',
		'subject' => 'string',
		'preheader' => 'string',
		'html_content' => 'string',
		'physical_address_in_footer' => '\PHPFUI\ConstantContact\Definition\EmailPhysicalAddress',

	];

	protected static array $maxLength = [
		'from_name' => 100,
		'from_email' => 80,
		'reply_to_email' => 80,
		'html_content' => 150000,

	];
	}
