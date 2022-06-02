<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $activity_id The ID that uniquely identifies the activity.
 * @property string $state The processing state for the activity.
 * @property \PHPFUI\ConstantContact\DateTime $created_at The system generated date and time that the resource was created, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $updated_at The system generated date and time that the resource was last updated, in ISO-8601 format.
 * @property int $percent_done The percentage complete for the specified activity.
 * @property array<\PHPFUI\ConstantContact\Definition\ActivityErrors> $activity_errors An array of error messages if errors occurred for a specified activity. The system returns an empty array if no errors occur.
 * @property \PHPFUI\ConstantContact\Definition\ActivityGenericStatus $status
 * @property \PHPFUI\ConstantContact\Definition\ActivityLinks2 $_links
 */
class ActivityGeneric extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'activity_id' => 'string',
		'state' => ['processing', 'completed', 'cancelled', 'failed', 'timed_out'],
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',
		'percent_done' => 'int',
		'activity_errors' => 'array<\PHPFUI\ConstantContact\Definition\ActivityErrors>',
		'status' => '\PHPFUI\ConstantContact\Definition\ActivityGenericStatus',
		'_links' => '\PHPFUI\ConstantContact\Definition\ActivityLinks2',

	];
	}
