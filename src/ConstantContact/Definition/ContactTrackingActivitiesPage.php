<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $tracking_activities The list of contact tracking activities in descending date order.
	 * @var PHPFUI\ConstantContact\Definition\Links2 $_links The next link if more contact tracking activities are available.
	 */

class ContactTrackingActivitiesPage extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'tracking_activities' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\Links2',

	];
	}