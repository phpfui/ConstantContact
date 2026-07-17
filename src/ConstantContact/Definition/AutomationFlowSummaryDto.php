<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $active_state State of the active definition
 * @property string $created_by_id User ID who created the flow
 * @property string $created_date Date the flow was created
 * @property string $description Description of the automation flow
 * @property string $draft_state State of the draft definition
 * @property string $id Automation flow ID
 * @property string $name Display name of the automation flow
 * @property string $promoted_by_id User ID who promoted the flow
 * @property string $promoted_date Date the flow was promoted
 * @property string $status Computed display status of the workflow
 * @property array<\PHPFUI\ConstantContact\Definition\StructuredTagDto> $structured_tags Structured tags associated with the automation flow
 * @property string $template_id Template ID the flow was created from
 * @property string $update_date Date the flow was last updated
 */
class AutomationFlowSummaryDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'active_state' => 'string',
		'created_by_id' => 'string',
		'created_date' => 'string',
		'description' => 'string',
		'draft_state' => 'string',
		'id' => 'string',
		'name' => 'string',
		'promoted_by_id' => 'string',
		'promoted_date' => 'string',
		'status' => 'string',
		'structured_tags' => 'array<\PHPFUI\ConstantContact\Definition\StructuredTagDto>',
		'template_id' => 'string',
		'update_date' => 'string',

	];
	}
