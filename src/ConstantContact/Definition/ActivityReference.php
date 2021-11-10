<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $campaign_activity_id The ID (UUID) that uniquely identifies a campaign activity.
	 * @var string $role The purpose of the individual campaign activity in the larger email campaign effort. Valid values are: <ul>
  <li>primary_email — The main email marketing campaign that you send to contacts. The <code>primary_email</code> contains the complete email content.</li>
  <li>permalink — A permanent link to a web accessible version of the <code>primary_email</code> content without any personalized email information. For example, permalinks do not contain any of the contact details that you add to the <code>primary_email</code> email content. </li>
  <li>resend — An email campaign that you resend to contacts that did not open the email campaign.</li>
</ul> Constant Contact creates a <code>primary_email</code> and a <code>permalink</code> role campaign activity when you create an email campaign.
	 */

class ActivityReference extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'campaign_activity_id' => 'string',
		'role' => ['primary_email', 'permalink', 'resend'],

	];
	}