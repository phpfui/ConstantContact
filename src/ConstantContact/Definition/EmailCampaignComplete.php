<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $name The unique and descriptive name that you specify for the email campaign.
 * @property array<\PHPFUI\ConstantContact\Definition\EmailCampaignActivityInput> $email_campaign_activities The content of the email campaign as an array that contains a single email campaign activity object.
 */
class EmailCampaignComplete extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'name' => 'string',
		'email_campaign_activities' => 'array<\PHPFUI\ConstantContact\Definition\EmailCampaignActivityInput>',

	];

	protected static array $maxLength = [
		'name' => 80,

	];
	}
