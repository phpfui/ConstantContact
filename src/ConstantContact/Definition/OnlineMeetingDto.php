<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $create_time Create time of the event. ISO format.
 * @property bool $enabled_flag
 * @property string $instructions
 * @property string $label
 * @property string $last_update_time Last modification time of the event. ISO format.
 * @property string $provider_type The type of online meeting provider for the event
 * @property string $url The URL to use for the online meeting.
 */
class OnlineMeetingDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'create_time' => 'string',
		'enabled_flag' => 'bool',
		'instructions' => 'string',
		'label' => 'string',
		'last_update_time' => 'string',
		'provider_type' => 'string',
		'url' => 'string',

	];
	}
