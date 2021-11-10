<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var \PHPFUI\ConstantContact\UUID $contact_id The unique ID of the contact for which the report is being generated.
 * @var int $included_activities_count The number of activities included in the calculation.
 * @var float $average_open_rate The average rate the contact opened emails sent to them.
 * @var float $average_click_rate The average rate the contact clicked on links in emails sent to them.
 */
class ContactOpenAndClickRates extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_id' => '\PHPFUI\ConstantContact\UUID',
		'included_activities_count' => 'int',
		'average_open_rate' => 'float',
		'average_click_rate' => 'float',

	];
	}
