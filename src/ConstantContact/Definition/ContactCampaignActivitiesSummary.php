<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var PHPFUI\ConstantContact\UUID $contact_id Unique id of the contact that will have their activity summarized.
	 * @var array $campaign_activities A summary of all the actions for a contact.
	 * @var PHPFUI\ConstantContact\Definition\Links2 $_links The next link if more summaries of activities are available.
	 */

class ContactCampaignActivitiesSummary extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'contact_id' => 'PHPFUI\ConstantContact\UUID',
		'campaign_activities' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\Links2',

	];
	}