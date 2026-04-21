<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $id The unique identifier for the automation campaign workflow.
 * @property string $name The name of the automation campaign.
 * @property string $description The description of the automation campaign.
 * @property array<\PHPFUI\ConstantContact\Definition\AutomationStructuredTag> $structured_tags
 * @property \PHPFUI\ConstantContact\Definition\AutomationWorkflowDefinition $active_definition
 * @property \PHPFUI\ConstantContact\Definition\AutomationWorkflowDefinition $draft_definition
 * @property bool $is_name_explicitly_set Indicates whether the automation campaign name was explicitly set.
 */
class AutomationCampaign extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'id' => 'string',
		'name' => 'string',
		'description' => 'string',
		'structured_tags' => 'array<\PHPFUI\ConstantContact\Definition\AutomationStructuredTag>',
		'active_definition' => '\PHPFUI\ConstantContact\Definition\AutomationWorkflowDefinition',
		'draft_definition' => '\PHPFUI\ConstantContact\Definition\AutomationWorkflowDefinition',
		'is_name_explicitly_set' => 'bool',

	];
	}
