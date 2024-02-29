<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\PContactClickTrackingActivity> $tracking_activities The list of landing page contact click tracking activities.
 * @property \PHPFUI\ConstantContact\Definition\LpreportingLinks $_links HAL property that contains next link if applicable
 */
class PContactClickTrackingActivitiesPage extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'tracking_activities' => 'array<\PHPFUI\ConstantContact\Definition\PContactClickTrackingActivity>',
		'_links' => '\PHPFUI\ConstantContact\Definition\LpreportingLinks',

	];
	}
