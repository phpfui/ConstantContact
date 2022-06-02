<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\BouncesTrackingActivity> $tracking_activities The list of email bounce tracking activities associated with a given `campaign_activity_id'.
 * @property \PHPFUI\ConstantContact\Definition\Links2 $_links HAL property that contains next link if applicable
 */
class BouncesTrackingActivitiesPage extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'tracking_activities' => 'array<\PHPFUI\ConstantContact\Definition\BouncesTrackingActivity>',
		'_links' => '\PHPFUI\ConstantContact\Definition\Links2',

	];
	}
