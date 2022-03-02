<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var \PHPFUI\ConstantContact\UUID $activity_id Unique ID for the activity.
 * @var string $state The state of the request: initialized - request has been received processing - request is being processed completed - job completed cancelled - request was cancelled failed - job failed to complete timed_out - the request timed out before completing
 * @var \PHPFUI\ConstantContact\DateTime $started_at Timestamp showing when we began processing the activity request, in ISO-8601 format.
 * @var \PHPFUI\ConstantContact\DateTime $completed_at Timestamp showing when we completed processing the activity, in ISO-8601 format.
 * @var \PHPFUI\ConstantContact\DateTime $created_at Timestamp showing when we created the activity, in ISO-8601 format.
 * @var \PHPFUI\ConstantContact\DateTime $updated_at Timestamp showing when we last updated the activity, in ISO-8601 format.
 * @var int $percent_done Shows the percent done for an activity that we are still processing.
 * @var array $activity_errors Array of messages describing the errors that occurred.
 * @var \PHPFUI\ConstantContact\Definition\Status $status
 * @var \PHPFUI\ConstantContact\Definition\ActivityStatusLink $_links
 */
class ActivityListsMembership extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'activity_id' => '\PHPFUI\ConstantContact\UUID',
		'state' => ['initialized', 'processing', 'completed', 'cancelled', 'failed', 'timed_out'],
		'started_at' => '\PHPFUI\ConstantContact\DateTime',
		'completed_at' => '\PHPFUI\ConstantContact\DateTime',
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',
		'percent_done' => 'int',
		'activity_errors' => 'array',
		'status' => '\PHPFUI\ConstantContact\Definition\Status',
		'_links' => '\PHPFUI\ConstantContact\Definition\ActivityStatusLink',

	];
	}
