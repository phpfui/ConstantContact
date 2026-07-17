<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\ParameterDto> $parameters List of parameters that filter or configure the trigger (e.g., list IDs for list_join).
 * @property string $action_name Action name. Required for type Action or Date. Identifies the specific trigger (e.g., list_join, calendar_date, visits_page).
 * @property \PHPFUI\ConstantContact\Definition\Bounds $bounds Time window for Date-type triggers. Sets when the trigger runs relative to
 * the contact's date. Uses ISO 8601 period format (e.g., P0D, P7D, P-7D).
 * | Example Scenario | after  | before |
 * |----------|--------|--------|
 * | On the day | `P0D`  | `P1D` |
 * | 7 days before | `P-7D` | `P-6D` |
 * | 7 days after | `P7D`  | `P8D` |
 * @property string $engagement_level Engagement level for engagement_level triggers (e.g., SOMEWHAT, LEAST).
 * @property string $segment_id Segment ID for segment_join triggers.
 * @property \PHPFUI\ConstantContact\Definition\TriggerDate $trigger_date Date configuration for Date-type triggers (e.g., birthday, anniversary). Specifies which contact fields supply the date.
 * @property string $type Trigger type. Determines how the trigger is evaluated (e.g., Action, Date, segment_join).
 * @property string $unique_by Deduplication key: run the workflow at most once per contact per this value (e.g., list_ids, contact_id).
 */
class TriggerDefDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'parameters' => 'array<\PHPFUI\ConstantContact\Definition\ParameterDto>',
		'action_name' => 'string',
		'bounds' => '\PHPFUI\ConstantContact\Definition\Bounds',
		'engagement_level' => 'string',
		'segment_id' => 'string',
		'trigger_date' => '\PHPFUI\ConstantContact\Definition\TriggerDate',
		'type' => 'string',
		'unique_by' => 'string',

	];
	}
