<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $tracking_activities The list of contacts that forwarded the specified email campaign activity.
	 * @var PHPFUI\ConstantContact\Definition\Links2 $_links HAL property that contains the next link, if applicable.
	 */

class ForwardsTrackingActivitiesPage extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'tracking_activities' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\Links2',

	];
	}