<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\Definition\WorkflowParametersDto $parameters
 * @property \PHPFUI\ConstantContact\Definition\CorrelationMetadataDto $correlation_metadata
 * @property array<\PHPFUI\ConstantContact\Definition\TaskDto> $tasks
 * @property string $status Workflow definition status.
 * @property \PHPFUI\ConstantContact\Definition\Metadata $metadata Workflow metadata.
 * @property \PHPFUI\ConstantContact\Definition\TimeoutDto $timeout
 * @property bool $upgradable Indicates if the workflow can be upgraded after it is activated.
 */
class AutomationWorkflowDef extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'parameters' => '\PHPFUI\ConstantContact\Definition\WorkflowParametersDto',
		'correlation_metadata' => '\PHPFUI\ConstantContact\Definition\CorrelationMetadataDto',
		'tasks' => 'array<\PHPFUI\ConstantContact\Definition\TaskDto>',
		'status' => 'string',
		'metadata' => '\PHPFUI\ConstantContact\Definition\Metadata',
		'timeout' => '\PHPFUI\ConstantContact\Definition\TimeoutDto',
		'upgradable' => 'bool',

	];
	}
