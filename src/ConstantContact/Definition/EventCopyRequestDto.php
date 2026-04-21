<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $target_event_name Name for the copied event. Must be unique for the account.
 * @property array<\PHPFUI\ConstantContact\UUID> $source_campaign_activities Optional array of campaign activity UUIDs to copy. If not provided, all activities are copied.
 */
class EventCopyRequestDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'target_event_name' => 'string',
		'source_campaign_activities' => 'array<\PHPFUI\ConstantContact\UUID>',

	];
	}
