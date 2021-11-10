<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var string $activity_id The ID that uniquely identifies the activity.
 * @var string $state The processing state for the activity.
 * @var DateTime $created_at The system generated date and time that the resource was created, in ISO-8601 format.
 * @var DateTime $updated_at The system generated date and time that the resource was last updated, in ISO-8601 format.
 * @var int $percent_done The percentage complete for the specified activity.
 * @var array[\PHPFUI\ConstantContact\Definition\ActivityErrors] $activity_errors An array of error messages if errors occurred for a specified activity. The system returns an empty array if no errors occur.
 */
class ActivityGeneric extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'activity_id' => 'string',
		'state' => ['processing', 'completed', 'cancelled', 'failed', 'timed_out'],
		'created_at' => 'DateTime',
		'updated_at' => 'DateTime',
		'percent_done' => 'int',
		'activity_errors' => 'array[\PHPFUI\ConstantContact\Definition\ActivityErrors]',
		'status' => '\PHPFUI\ConstantContact\Definition\ActivityGenericStatus',
		'_links' => '\PHPFUI\ConstantContact\Definition\ActivityLinks2',

	];
	}
