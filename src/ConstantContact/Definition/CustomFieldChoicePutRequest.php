<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $choice_id The ID that uniquely identifies the choice.
 * @property string $choice_label Label to display for the choice on the user interface.
 * @property int $display_order Stores the order for displaying a list of choices.
 */
class CustomFieldChoicePutRequest extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'choice_id' => 'int',
		'choice_label' => 'string',
		'display_order' => 'int',

	];

	protected static array $maxLength = [
		'choice_label' => 255,

	];
	}
