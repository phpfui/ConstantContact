<?php

namespace PHPFUI\ConstantContact\Definition;

class DocumentProperties extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $style_content Contains style sheet elements for XHTML letter format emails. This property applies only to <code>format_type</code> 1.
	 * @var string $letter_format Email message format. Valid values are <code>HTML</code> and <code>XHTML</code>. By default, the value is <code>HTML</code>. For more information, see the <a href="http://www.constantcontact.com/display_media.jsp?id=87" target="_blank">Advanced Editor User's Guide</a>. This property applies only to <code>format_type</code> 1. You cannot change this property after you create an email.
	 * @var string $greeting_salutation The greeting used in the email message. This property applies only to <code>format_type</code> 1.
	 * @var string $greeting_name_type The type of name the campaign uses to greet the contact. Valid values are <code>F</code> (First Name), <code>L</code> (Last Name), <code>B</code> (First and Last Name), or <code>N</code> (No greeting). By default, the value is <code>N</code>. This property applies only to <code>format_type</code> 1.
	 * @var string $greeting_secondary A fallback text string the campaign uses to greet the contact when the <code>greeting_name_type</code> is not available or set to <code>N</code>. This property applies only to <code>format_type</code> 1.
	 * @var string $subscribe_link_enabled If <code>true</code>, the email footer includes a link for subscribing to the list. If <code>false</code>, the message footer does not include a link for subscribing to the list. By default, the value is <code>false</code>. This property applies only to <code>format_type</code> 1.
	 * @var string $subscribe_link_name The text displayed as the name for the subscribe link in the email footer. This property applies only to <code>format_type</code> 1.
	 * @var string $text_content Contains the text content that Constant Contact displays to contacts when their email client cannot display HTML email. If you do not specify text content, Constant Contact displays "Greetings!" as the text content. This property applies only to <code>format_type</code> 1.
	 * @var string $permission_reminder_enabled If <code>true</code>, Constant Contact displays your <code>permission_reminder</code> message to contacts at top of the email. If <code>false</code>, Constant Contact does not display the message. By default, the value is <code>false</code>. This property applies to <code>format_type</code> 1 and 2.
	 * @var string $permission_reminder The message text Constant Contact displays at the top of the email message to remind users that they are subscribed to an email list. This property applies to <code>format_type</code> 1 and 2.
	 * @var string $view_as_webpage_enabled If <code>true</code>, Constant Contact displays the view as web page email message. If <code>false</code> Constant Contact does not display the message. By default, the value is <code>false</code>. This property applies to <code>format_type</code> 1 and 2.
	 * @var string $view_as_webpage_text The text Constant Contact displays before the view as web page link at the top of the email. This property applies to <code>format_type</code> 1 and 2.
	 * @var string $view_as_webpage_link_name The name of the link that users can click to view the email as a web page. This property applies to <code>format_type</code> 1 and 2.
	 * @var string $forward_email_link_enabled If <code>true</code>, when the user forwards an email message the footer includes a link for subscribing to the list. If <code>false</code>, when a user forwards an email message the footer does not include a link for subscribing to the list. By default, the value is <code>false</code>. This property applies to <code>format_type</code> 1 and 2.
	 * @var string $forward_email_link_name The text displayed as the name for the forward email link in the footer when a user forwards an email. This property applies to <code>format_type</code> 1 and 2.
	 */

	protected static array $fields = [
		'style_content' => 'string',
		'letter_format' => ['HTML', 'XHTML'],
		'greeting_salutation' => 'string',
		'greeting_name_type' => ['F', 'L', 'B', 'N'],
		'greeting_secondary' => 'string',
		'subscribe_link_enabled' => ['true', 'false'],
		'subscribe_link_name' => 'string',
		'text_content' => 'string',
		'permission_reminder_enabled' => ['false', 'true'],
		'permission_reminder' => 'string',
		'view_as_webpage_enabled' => 'string',
		'view_as_webpage_text' => 'string',
		'view_as_webpage_link_name' => 'string',
		'forward_email_link_enabled' => ['true', 'false'],
		'forward_email_link_name' => 'string',

	];

	protected static array $maxLength = [
		'style_content' => 150000,
		'greeting_salutation' => 50,
		'greeting_secondary' => 1500,
		'subscribe_link_name' => 80,
		'text_content' => 150000,
		'permission_reminder' => 1500,
		'view_as_webpage_text' => 50,
		'forward_email_link_name' => 80,

	];
	}