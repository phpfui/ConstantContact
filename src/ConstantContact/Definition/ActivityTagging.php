<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $activity_id The system assigned UUID that uniquely identifies an activity.
	 * @var string $state The activity processing state.
	 * @var DateTime $started_at Timestamp showing when processing started for the activity, in ISO-8601 format.
	 * @var DateTime $completed_at Timestamp showing when processing completed for the activity, in ISO-8601 format.
	 * @var DateTime $created_at Timestamp showing when the activity was first requested, in ISO-8601 format.
	 * @var DateTime $updated_at Timestamp showing when the activity was last updated, in ISO-8601 format.
	 * @var int $percent_done The processing percent complete for the activity.
	 * @var array $activity_errors An array of error message strings describing the errors that occurred.
	 */

class ActivityTagging extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'activity_id' => 'string',
		'state' => ['initialized', 'processing', 'completed', 'cancelled', 'failed', 'timed_out'],
		'started_at' => 'DateTime',
		'completed_at' => 'DateTime',
		'created_at' => 'DateTime',
		'updated_at' => 'DateTime',
		'percent_done' => 'int',
		'activity_errors' => 'array',
		'status' => '\PHPFUI\ConstantContact\Definition\ActivityTaggingStatus',
		'_links' => '\PHPFUI\ConstantContact\Definition\ActivityLinks',

	];
	}