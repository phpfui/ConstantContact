<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $custom_field_id The ID that uniquely identifies a custom field.
 * @property int $choice_id The ID that uniquely identifies the choice identifier.
 * @property string $choice_label Label to display for the choice on the user interface.
 * @property int $display_order Stores the order for displaying a list of choices.
 * @property \PHPFUI\ConstantContact\DateTime $created_at Date and time that the record was created, in ISO-8601 format. System generated.
 * @property \PHPFUI\ConstantContact\DateTime $updated_at Date and time that the record was updated, in ISO-8601 format. System generated.
 * @property \PHPFUI\ConstantContact\Date $deleted_at Date the choice was deleted, in ISO-8601 format. System generated.
 */
class CustomFieldChoice extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'custom_field_id' => '\PHPFUI\ConstantContact\UUID',
		'choice_id' => 'int',
		'choice_label' => 'string',
		'display_order' => 'int',
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',
		'deleted_at' => '\PHPFUI\ConstantContact\Date',

	];

	protected static array $maxLength = [
		'choice_label' => 255,

	];
	}
