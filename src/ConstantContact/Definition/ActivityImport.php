<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $activity_id Unique ID for the activity.
 * @property string $state The state of the request: initialized - request has been received processing - request is being processed completed - job completed cancelled - request was cancelled failed - job failed to complete timed_out - the request timed out before completing
 * @property \PHPFUI\ConstantContact\DateTime $started_at Timestamp showing when we began processing the activity request, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $completed_at Timestamp showing when we completed processing the activity, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $created_at Timestamp showing when we created the activity, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $updated_at Timestamp showing when we last updated the activity, in ISO-8601 format.
 * @property string $source_file_name Name of the file used for an file_import activity.
 * @property int $percent_done Shows the percent done for an activity that we are still processing.
 * @property array $activity_errors Array of messages describing the errors that occurred.
 * @property \PHPFUI\ConstantContact\Definition\Status $status
 * @property \PHPFUI\ConstantContact\Definition\ActivityStatusLink $_links
 */
class ActivityImport extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'activity_id' => '\PHPFUI\ConstantContact\UUID',
		'state' => ['initialized', 'processing', 'completed', 'cancelled', 'failed', 'timed_out'],
		'started_at' => '\PHPFUI\ConstantContact\DateTime',
		'completed_at' => '\PHPFUI\ConstantContact\DateTime',
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',
		'source_file_name' => 'string',
		'percent_done' => 'int',
		'activity_errors' => 'array',
		'status' => '\PHPFUI\ConstantContact\Definition\Status',
		'_links' => '\PHPFUI\ConstantContact\Definition\ActivityStatusLink',

	];
	}
