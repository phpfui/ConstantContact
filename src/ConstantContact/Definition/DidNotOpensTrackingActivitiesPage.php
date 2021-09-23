<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $tracking_activities Lists contacts that did not open the specified <code>campaign_activity_id</code>.
	 * @var PHPFUI\ConstantContact\Definition\Links2 $_links HAL property that contains the next link, if applicable.
	 */

class DidNotOpensTrackingActivitiesPage extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'tracking_activities' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\Links2',

	];
	}