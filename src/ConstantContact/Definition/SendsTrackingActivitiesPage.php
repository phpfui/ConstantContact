<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $tracking_activities Lists the contacts to which the email campaign activity (<code>campaign_activity_id</code>) was sent.
	 * @var PHPFUI\ConstantContact\Definition\Links2 $_links HAL property that contains the next link, if applicable.
	 */

class SendsTrackingActivitiesPage extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'tracking_activities' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\Links2',

	];
	}