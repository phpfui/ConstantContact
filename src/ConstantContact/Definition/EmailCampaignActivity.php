<?php

namespace PHPFUI\ConstantContact\Definition;

class EmailCampaignActivity extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $campaign_activity_id Identifies a campaign activity in the V3 API.
	 * @var string $campaign_id Identifies a campaign in the V3 API.
	 * @var string $role The purpose of the individual campaign activity in the larger email campaign effort. Valid values are: <ul>
  <li>primary_email — The main email marketing campaign that you send to contacts. The <code>primary_email</code> contains the complete email content.</li>
  <li>permalink — A permanent link to a web accessible version of the <code>primary_email</code> content without any personalized email information. For example, permalinks do not contain any of the contact details that you add to the <code>primary_email</code> email content. </li>
  <li>resend — An email campaign that you resend to contacts that did not open the email campaign.</li>
</ul> Constant Contact creates a <code>primary_email</code> and a <code>permalink</code> role campaign activity when you create an email campaign.
	 * @var array $contact_list_ids The contacts that Constant Contact sends the email campaign activity to as an array of contact <code>list_id</code> values. You cannot use contact lists and segments at the same time in an email campaign activity.
	 * @var array $segment_ids The contacts that Constant Contact sends the email campaign activity to as an array containing a single <code>segment_id</code> value. Only <code>format_type</code> 3, 4, and 5 email campaign activities support segments. You cannot use contact lists and segments at the same time in an email campaign activity.
	 * @var string $current_status The current status of the email campaign activity. Valid values are: <ul>
  <li>DRAFT — An email campaign activity that you have created but have not sent to contacts.</li>
  <li>SCHEDULED — An email campaign activity that you have scheduled for Constant Contact to send to contacts.</li>
  <li>EXECUTING — An email campaign activity Constant Contact is currently sending to contacts. Email campaign activities are only in this status briefly.</li>
  <li>DONE — An email campaign activity that you successfully sent to contacts.</li>
  <li>ERROR — An email campaign activity that encountered an error.</li>
  <li>REMOVED — An email campaign that a user deleted. Users can view and restore deleted emails through the UI.</li>
</ul>
	 * @var int $format_type Identifies the type of email format. Valid values are: <ul>
  <li>1 - A legacy custom code email created using the V2 API, the V3 API, or the legacy UI HTML editor.</li>
  <li>2 - An email created using the second generation email editor UI.</li>
  <li>3 - An email created using the third generation email editor UI. This email editor features an improved drag and drop UI and mobile responsiveness.</li>
  <li>4 - An email created using the fourth generation email editor UI.</li>
  <li>5 - A custom code email created using the V3 API or the new UI HTML editor.</li>
</ul>
	 * @var string $from_email The email "From Email" field for the email campaign activity. You must use a confirmed Constant Contact account email address. Make a GET call to <code>/account/emails</code> to return a collection of account emails and their confirmation status.
	 * @var string $from_name The email "From Name" field for the email campaign activity.
	 * @var string $reply_to_email The email "Reply To Email" field for the email campaign activity. You must use a confirmed Constant Contact account email address. Make a GET call to <code>/account/emails</code> to return a collection of account emails and their confirmation status.
	 * @var string $subject The email "Subject" field for the email campaign activity.
	 * @var string $html_content The HTML or XHTML content for the email campaign activity. Only <code>format_type</code> 1 and 5 (legacy custom code emails or modern custom code emails) can contain <code>html_content</code>.
	 * @var string $template_id Identifies the email layout and design template that the email campaign activity is using as a base.
	 * @var string $permalink_url The permanent link to a web accessible version of the email campaign content without any personalized email information. The permalink URL becomes accessible after you send an email campaign to contacts.
	 * @var string $preheader The email preheader for the email campaign activity. Only <code>format_type</code> 3, 4, and 5 email campaign activities use the preheader property.
	 * @var PHPFUI\ConstantContact\Definition\EmailPhysicalAddress $physical_address_in_footer The physical address of the organization that is sending the email campaign. Constant Contact displays this information to contacts in the email message footer.
	 * @var PHPFUI\ConstantContact\Definition\DocumentProperties $document_properties An object that contains optional properties for legacy format type emails (<code>format_type</code> 1 and 2). If you attempt to add a property that does apply to the email <code>format_type</code>, the API will ignore the property.
	 */

	protected static array $fields = [
		'campaign_activity_id' => 'string',
		'campaign_id' => 'string',
		'role' => ['primary_email', 'permalink', 'resend'],
		'contact_list_ids' => 'array',
		'segment_ids' => 'array',
		'current_status' => ['DRAFT', 'SCHEDULED', 'EXECUTING', 'DONE', 'ERROR', 'REMOVED'],
		'format_type' => [1, 2, 3, 4, 5],
		'from_email' => 'string',
		'from_name' => 'string',
		'reply_to_email' => 'string',
		'subject' => 'string',
		'html_content' => 'string',
		'template_id' => 'string',
		'permalink_url' => 'string',
		'preheader' => 'string',
		'physical_address_in_footer' => 'PHPFUI\\ConstantContact\\Definition\\EmailPhysicalAddress',
		'document_properties' => 'PHPFUI\\ConstantContact\\Definition\\DocumentProperties',

	];
	}