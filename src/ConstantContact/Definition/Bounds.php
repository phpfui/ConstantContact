<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $after Start of the window relative to the contact date in ISO 8601 period format (e.g., P0D = on the day, P-7D = 7 days before).
 * @property string $before End of the window relative to the contact date in ISO 8601 period format (e.g., P1D = 1 day after, P0D = on the day).
 */
class Bounds extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'after' => 'string',
		'before' => 'string',

	];
	}
