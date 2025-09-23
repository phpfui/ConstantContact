<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $choice_label Label to display for the choice on the user interface.
 * @property int $display_order Stores the order for displaying a list of choices.
 */
class CustomFieldChoiceRequest extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'choice_label' => 'string',
		'display_order' => 'int',

	];

	protected static array $maxLength = [
		'choice_label' => 255,

	];
	}
