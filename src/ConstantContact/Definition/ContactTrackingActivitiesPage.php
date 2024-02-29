<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\ContactTrackingActivity> $tracking_activities The list of contact tracking activities in descending date order.
 * @property \PHPFUI\ConstantContact\Definition\ReportingLinks $_links The next link if more contact tracking activities are available.
 */
class ContactTrackingActivitiesPage extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'tracking_activities' => 'array<\PHPFUI\ConstantContact\Definition\ContactTrackingActivity>',
		'_links' => '\PHPFUI\ConstantContact\Definition\ReportingLinks',

	];
	}
