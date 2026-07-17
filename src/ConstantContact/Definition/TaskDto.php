<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\TaskDto> $child_tasks
 * @property \PHPFUI\ConstantContact\Definition\TaskCorrelationMetadataDto $correlation_metadata
 * @property array<\PHPFUI\ConstantContact\Definition\TaskDto> $else
 * @property string $event_condition
 * @property string $id
 * @property \PHPFUI\ConstantContact\Definition\Input $input Task input object
 * @property \PHPFUI\ConstantContact\Definition\JsonCondition $json_condition
 * @property string $kind Task type.
 * @property \PHPFUI\ConstantContact\Definition\Metadata $metadata Task metadata object.
 * @property string $name Task name.
 * @property \PHPFUI\ConstantContact\Definition\Output $output
 * @property string $queue_name
 * @property \PHPFUI\ConstantContact\Definition\RetryOptions $retry_options
 * @property string $script
 * @property string $task_provider_reference_key
 * @property string $task_skip_condition
 * @property array<\PHPFUI\ConstantContact\Definition\TaskDto> $then
 * @property \PHPFUI\ConstantContact\Definition\TimeoutDto $timeout
 */
class TaskDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'child_tasks' => 'array<\PHPFUI\ConstantContact\Definition\TaskDto>',
		'correlation_metadata' => '\PHPFUI\ConstantContact\Definition\TaskCorrelationMetadataDto',
		'else' => 'array<\PHPFUI\ConstantContact\Definition\TaskDto>',
		'event_condition' => 'string',
		'id' => 'string',
		'input' => '\PHPFUI\ConstantContact\Definition\Input',
		'json_condition' => '\PHPFUI\ConstantContact\Definition\JsonCondition',
		'kind' => 'string',
		'metadata' => '\PHPFUI\ConstantContact\Definition\Metadata',
		'name' => 'string',
		'output' => '\PHPFUI\ConstantContact\Definition\Output',
		'queue_name' => 'string',
		'retry_options' => '\PHPFUI\ConstantContact\Definition\RetryOptions',
		'script' => 'string',
		'task_provider_reference_key' => 'string',
		'task_skip_condition' => 'string',
		'then' => 'array<\PHPFUI\ConstantContact\Definition\TaskDto>',
		'timeout' => '\PHPFUI\ConstantContact\Definition\TimeoutDto',

	];
	}
