<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $create_time Create time of the event.
 * @property string $last_update_time Last modification time of the event.
 * @property string $attribute_id The unique identifier for the attribute.
 * @property int $display_order The order in which the attribute should display.
 * @property string $name The name of the attribute
 * @property int $quantity_total The total quantity available for this attribute.
 * @property int $quantity_remaining The total quantity that remains available for this attribute.
 * @property int $quantity_sold The total quantity sold for this attribute.
 * @property bool $paused_flag Specifies if the attribute is currently paused from sales.
 * @property string $deleted_time The time when the attribute was deleted.
 * @property array<\PHPFUI\ConstantContact\Definition\StatusDisplayLabelDto> $status_labels
 */
class AttributeDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'create_time' => 'string',
		'last_update_time' => 'string',
		'attribute_id' => 'string',
		'display_order' => 'int',
		'name' => 'string',
		'quantity_total' => 'int',
		'quantity_remaining' => 'int',
		'quantity_sold' => 'int',
		'paused_flag' => 'bool',
		'deleted_time' => 'string',
		'status_labels' => 'array<\PHPFUI\ConstantContact\Definition\StatusDisplayLabelDto>',

	];
	}
