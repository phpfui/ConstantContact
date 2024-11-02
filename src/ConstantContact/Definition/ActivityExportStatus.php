<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $activity_id Unique ID for the activity.
 * @property string $state <p> The state of the request: <ul>
 <li>initialized - request has been received</li>
 <li>processing - request is being processed</li>
 <li>completed - job completed</li>
 <li>cancelled - request was cancelled</li>
 <li>failed - job failed to complete</li>
 <li>timed_out - the request timed out before completing"</li>
 </ul> </p>
 * @property \PHPFUI\ConstantContact\DateTime $started_at Timestamp showing when we began processing the activity request, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $completed_at Timestamp showing when we completed processing the activity, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $created_at Timestamp showing when we created the activity, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $updated_at Timestamp showing when we last updated the activity, in ISO-8601 format.
 * @property int $percent_done Shows the percent done for an activity that we are still processing.
 * @property array $activity_errors Array of messages describing the errors that occurred.
 * @property \PHPFUI\ConstantContact\Definition\Status $status
 * @property \PHPFUI\ConstantContact\Definition\ActivityStatusExportLink $_links
 */
class ActivityExportStatus extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'activity_id' => '\PHPFUI\ConstantContact\UUID',
		'state' => 'string',
		'started_at' => '\PHPFUI\ConstantContact\DateTime',
		'completed_at' => '\PHPFUI\ConstantContact\DateTime',
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',
		'percent_done' => 'int',
		'activity_errors' => 'array',
		'status' => '\PHPFUI\ConstantContact\Definition\Status',
		'_links' => '\PHPFUI\ConstantContact\Definition\ActivityStatusExportLink',

	];
	}
