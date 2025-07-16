<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $name The name of the promotional code.
 * @property string $end_time The date to end the promotional code. ISO format
 * @property string $deleted_time Delete time of the promo code. ISO format.
 * @property string $description Promotional code description.
 * @property int $discount_amount The discount dollar amount date to apply to the promotional code.
 * @property string $discount_code_scope The scope that applies to the discount code.
 * @property string $discount_code_type The type of discount code to use for the event.
 * @property int $discount_percent The promotional discount percentage to apply for the promotional code.
 * @property string $id The ID to use for the promotion code.
 * @property array<\PHPFUI\ConstantContact\Definition\ItemSummaryDto> $items List of items associated with this promo code.
 * @property bool $paused_flag Pauses the promotional code.
 * @property int $quantity_available Total number of promotional codes available for use.
 * @property int $quantity_total Total number of promotional codes to accept.
 * @property int $quantity_used Total number of promotional codes used.
 * @property string $start_time The date the promotional code starts. ISO format
 * @property string $status The status of the promo code.
 * @property array<\PHPFUI\ConstantContact\Definition\StatusDisplayLabelDto> $status_labels Status display labels with display text and translation key.
 * @property array<\PHPFUI\ConstantContact\Definition\TicketSummaryDto> $tickets
 * @property bool $time_limit_flag Indicates a time limit applies to the promotional code.
 */
class PromoCodeDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'name' => 'string',
		'end_time' => 'string',
		'deleted_time' => 'string',
		'description' => 'string',
		'discount_amount' => 'int',
		'discount_code_scope' => 'string',
		'discount_code_type' => 'string',
		'discount_percent' => 'int',
		'id' => 'string',
		'items' => 'array<\PHPFUI\ConstantContact\Definition\ItemSummaryDto>',
		'paused_flag' => 'bool',
		'quantity_available' => 'int',
		'quantity_total' => 'int',
		'quantity_used' => 'int',
		'start_time' => 'string',
		'status' => 'string',
		'status_labels' => 'array<\PHPFUI\ConstantContact\Definition\StatusDisplayLabelDto>',
		'tickets' => 'array<\PHPFUI\ConstantContact\Definition\TicketSummaryDto>',
		'time_limit_flag' => 'bool',

	];
	}
