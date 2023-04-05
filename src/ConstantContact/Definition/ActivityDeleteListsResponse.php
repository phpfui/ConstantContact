<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $activity_id The system assigned UUID that uniquely identifies an activity.
 * @property string $state The activity processing state.
 * @property \PHPFUI\ConstantContact\DateTime $started_at Timestamp showing when processing started for the activity, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $completed_at Timestamp showing when processing completed for the activity, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $created_at Timestamp showing when the activity was first requested, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $updated_at Timestamp showing when the activity was last updated, in ISO-8601 format.
 * @property int $percent_done The processing percent complete for the activity.
 * @property array $activity_errors An array of error message strings describing the errors that occurred.
 * @property \PHPFUI\ConstantContact\Definition\Status $status
 * @property \PHPFUI\ConstantContact\Definition\Link $_links
 */
class ActivityDeleteListsResponse extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'activity_id' => 'string',
		'state' => ['initialized', 'processing', 'completed', 'cancelled', 'failed', 'timed_out'],
		'started_at' => '\PHPFUI\ConstantContact\DateTime',
		'completed_at' => '\PHPFUI\ConstantContact\DateTime',
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',
		'percent_done' => 'int',
		'activity_errors' => 'array',
		'status' => '\PHPFUI\ConstantContact\Definition\Status',
		'_links' => '\PHPFUI\ConstantContact\Definition\Link',

	];
	}
