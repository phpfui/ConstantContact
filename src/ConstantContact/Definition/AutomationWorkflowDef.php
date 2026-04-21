<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array $tasks
 * @property string $status
 * @property string $namespace
 * @property \PHPFUI\ConstantContact\Definition\Metadata $metadata
 * @property \PHPFUI\ConstantContact\Definition\Timeout $timeout
 * @property bool $upgradable
 */
class AutomationWorkflowDef extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'tasks' => 'array',
		'status' => 'string',
		'namespace' => 'string',
		'metadata' => '\PHPFUI\ConstantContact\Definition\Metadata',
		'timeout' => '\PHPFUI\ConstantContact\Definition\Timeout',
		'upgradable' => 'bool',

	];
	}
