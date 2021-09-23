<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $name The unique and descriptive name that you specify for the email campaign.
	 * @var array $email_campaign_activities The content of the email campaign as an array that contains a single email campaign activity object.
	 */

class EmailCampaignComplete extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'name' => 'string',
		'email_campaign_activities' => 'array',

	];

	protected static array $maxLength = [
		'name' => 80,

	];
	}