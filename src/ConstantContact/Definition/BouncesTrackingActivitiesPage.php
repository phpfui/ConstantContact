<?php

namespace PHPFUI\ConstantContact\Definition;

class BouncesTrackingActivitiesPage extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var array $tracking_activities The list of email bounce tracking activities associated with a given `campaign_activity_id'.
	 * @var PHPFUI\ConstantContact\Definition\Links2 $_links HAL property that contains next link if applicable
	 */

	protected static array $fields = [
		'tracking_activities' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\Links2',

	];
	}