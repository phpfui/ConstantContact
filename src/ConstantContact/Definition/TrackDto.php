<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $campaign_activity_id The campaign activity ID associated with the registration form.
 * @property \PHPFUI\ConstantContact\UUID $conf_email_campaign_activity_id The confirmation email campaign activity ID.
 * @property string $create_time The event's create time.
 * @property string $items_header items header
 * @property string $last_update_time The event's last modification time.
 * @property array<\PHPFUI\ConstantContact\Definition\EventMediaAssetDto> $media_assets The list of media assets configured for the event.
 * @property int $overall_ticket_capacity The total overall ticket capacity.
 * @property string $platform_fee_scope_type Specifies if the platform fee is passed to registrant or absorbed by the event host.
 * @property array<\PHPFUI\ConstantContact\Definition\PromoCodeDto> $promo_codes The list of <code>promo_codes</code> configured for the event.
 * @property bool $reg_manually_closed_flag Closes registration to prevent further registrations.
 * @property string $registration_end_time The date and time when registration should end. ISO format.
 * @property string $registration_type The registration type for the event.
 * @property bool $restrict_to_single_ticket_flag Restricts selection to a single ticket.
 * @property string $tickets_header The header to use for tickets.
 * @property string $track_id The ticket <code>track id</code>.
 * @property array<\PHPFUI\ConstantContact\Definition\ItemDto> $items
 */
class TrackDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'campaign_activity_id' => '\PHPFUI\ConstantContact\UUID',
		'conf_email_campaign_activity_id' => '\PHPFUI\ConstantContact\UUID',
		'create_time' => 'string',
		'items_header' => 'string',
		'last_update_time' => 'string',
		'media_assets' => 'array<\PHPFUI\ConstantContact\Definition\EventMediaAssetDto>',
		'overall_ticket_capacity' => 'int',
		'platform_fee_scope_type' => 'string',
		'promo_codes' => 'array<\PHPFUI\ConstantContact\Definition\PromoCodeDto>',
		'reg_manually_closed_flag' => 'bool',
		'registration_end_time' => 'string',
		'registration_type' => 'string',
		'restrict_to_single_ticket_flag' => 'bool',
		'tickets_header' => 'string',
		'track_id' => 'string',
		'items' => 'array<\PHPFUI\ConstantContact\Definition\ItemDto>',

	];
	}
