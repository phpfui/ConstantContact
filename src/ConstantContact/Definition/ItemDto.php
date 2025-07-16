<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $create_time The create time of the event is ISO format.
 * @property string $last_update_time Last modification time of the event.
 * @property string $item_id The unique identifier for the item.
 * @property int $display_order The order in which to display an item.
 * @property string $name The name of the item.
 * @property string $description The description of the item.
 * @property int $price The price per item.
 * @property int $quantity_total The total number of items available.
 * @property int $quantity_remaining The total number of items still available.
 * @property int $quantity_sold The total number of items sold.
 * @property int $limit_per_order Limits the number of items per order.
 * @property bool $show_remaining_flag Set to display or not to display the number of remaining items to customers.
 * @property bool $paused_flag Specifies if the item is currently paused from sales.
 * @property bool $deletable_flag Specifies if the item can be deleted.
 * @property string $media_internal_id The internal identifier for the item's image.
 * @property string $media_url The URL to associate with the media.
 * @property bool $time_limit_flag Specifies if the item has time-based availability.
 * @property string $start_time The start time when the item becomes available.
 * @property string $end_time The time that the item become unavailable.
 * @property bool $hidden_flag Specifies if the item is hidden from customers.
 * @property string $deleted_time The time when the item was deleted.
 * @property array<\PHPFUI\ConstantContact\Definition\StatusDisplayLabelDto> $status_labels
 * @property array<\PHPFUI\ConstantContact\Definition\AttributeDto> $attributes
 */
class ItemDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'create_time' => 'string',
		'last_update_time' => 'string',
		'item_id' => 'string',
		'display_order' => 'int',
		'name' => 'string',
		'description' => 'string',
		'price' => 'int',
		'quantity_total' => 'int',
		'quantity_remaining' => 'int',
		'quantity_sold' => 'int',
		'limit_per_order' => 'int',
		'show_remaining_flag' => 'bool',
		'paused_flag' => 'bool',
		'deletable_flag' => 'bool',
		'media_internal_id' => 'string',
		'media_url' => 'string',
		'time_limit_flag' => 'bool',
		'start_time' => 'string',
		'end_time' => 'string',
		'hidden_flag' => 'bool',
		'deleted_time' => 'string',
		'status_labels' => 'array<\PHPFUI\ConstantContact\Definition\StatusDisplayLabelDto>',
		'attributes' => 'array<\PHPFUI\ConstantContact\Definition\AttributeDto>',

	];
	}
