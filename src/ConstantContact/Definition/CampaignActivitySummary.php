<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $campaign_activity_id The unique id of the activity for an e-mail campaign.
 * @property \PHPFUI\ConstantContact\DateTime $start_on The last date at which the email was sent to this contact.
 * @property int $em_bounces The number of times the email has bounced for this contact.
 * @property int $em_clicks The number of times this contact has clicked a link in this email.
 * @property int $em_forwards The number of times this contact has forwarded this email.
 * @property int $em_opens The number of times this contact has opened this email.
 * @property int $em_sends The number of times the email was sent to this contact.
 * @property int $em_unsubscribes The number of times this contact has opted out.
 */
class CampaignActivitySummary extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'campaign_activity_id' => '\PHPFUI\ConstantContact\UUID',
		'start_on' => '\PHPFUI\ConstantContact\DateTime',
		'em_bounces' => 'int',
		'em_clicks' => 'int',
		'em_forwards' => 'int',
		'em_opens' => 'int',
		'em_sends' => 'int',
		'em_unsubscribes' => 'int',

	];
	}
