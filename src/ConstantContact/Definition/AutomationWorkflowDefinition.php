<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $state The current state of the workflow definition (e.g. DRAFT, ACTIVE).
 * @property \PHPFUI\ConstantContact\Definition\TriggerDto $trigger
 * @property \PHPFUI\ConstantContact\Definition\AutomationFlow $workflow
 */
class AutomationWorkflowDefinition extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'state' => 'string',
		'trigger' => '\PHPFUI\ConstantContact\Definition\TriggerDto',
		'workflow' => '\PHPFUI\ConstantContact\Definition\AutomationFlow',

	];
	}
