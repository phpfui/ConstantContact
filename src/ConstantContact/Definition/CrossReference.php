<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $v2_email_campaign_id Identifies an email campaign in the V2 API.
	 * @var PHPFUI\ConstantContact\UUID $campaign_id <p>Identifies a campaign in the V3 API. In the V3 API, each campaign contains one or more activities. For more information, see <a href="https://v3.developer.constantcontact.com/api_guide/v3_v2_email_campaign_deltas.html" target_"blank">V3 Email Campaign Resource Changes</a>.<p>
	 * @var PHPFUI\ConstantContact\UUID $campaign_activity_id <p>Identifies a campaign activity in the V3 API. In the V3 API, each campaign contains one or more activities. Email type activities represent the detailed information in an email and contain properties like <code>from_email</code> and <code>from_name</code>. For more information, see <a href="https://v3.developer.constantcontact.com/api_guide/v3_v2_email_campaign_deltas.html" target_"blank">V3 Campaign Resource Changes</a>.<p>
	 */

class CrossReference extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'v2_email_campaign_id' => 'string',
		'campaign_id' => 'PHPFUI\ConstantContact\UUID',
		'campaign_activity_id' => 'PHPFUI\ConstantContact\UUID',

	];
	}