<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\SegmentMaster> $segments Lists all segments for the account.
 * @property \PHPFUI\ConstantContact\Definition\SegmentsLinks $_links HAL property that contains next link if applicable.
 */
class SegmentsDTO extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'segments' => 'array<\PHPFUI\ConstantContact\Definition\SegmentMaster>',
		'_links' => '\PHPFUI\ConstantContact\Definition\SegmentsLinks',

	];
	}
