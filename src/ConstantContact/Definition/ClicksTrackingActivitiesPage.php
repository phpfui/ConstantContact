<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $tracking_activities The list of click tracking activities
	 * @var PHPFUI\ConstantContact\Definition\Links2 $_links HAL property that contains next link if applicable.
	 */

class ClicksTrackingActivitiesPage extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'tracking_activities' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\Links2',

	];
	}