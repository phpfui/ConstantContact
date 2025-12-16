<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $description Provides the event description.
 * @property string $title The title for the event. The title does not have to be unique for an account.
 * @property string $name The name of the event, has to be unique for the account.
 * @property \PHPFUI\ConstantContact\UUID $event_id The ID that uniquely identifies the event.
 * @property \PHPFUI\ConstantContact\UUID $campaign_id The system assigned ID that uniquely identifies the event and is identical to the `event_id`.
 * @property string $event_start The date the event starts.
 * @property string $event_end The date the event ends.
 * @property string $event_type Identifies the event type.
 * @property string $eso The encrypted SOId.
 * @property \PHPFUI\ConstantContact\Definition\ContactDto $contact The contact information associated with the event.
 * @property string $create_time The time the event was created, in ISO format. Read-only.
 * @property string $active_time The time the event was published, in ISO format.
 * @property string $cancelled_time The time the event was cancelled, in ISO format. Read-only.
 * @property string $deleted_time The time the event was deleted, in ISO format. Read-only.
 * @property string $last_update_time The date and time the event was last modified.
 * @property \PHPFUI\ConstantContact\Definition\AddressDto $address
 * @property string $currency_type The accepted currency for payments. Required for events collecting payments ['AUD','BRL','CAD','CHF','CZK','DKK','EUR','GBP','HKD','HUF','ILS','JPY','MXN','MYR','NOK','NZD','PHP','PLN','RUB','SEK','SGD','THB','TRY','TWD','USD']
 * @property \PHPFUI\ConstantContact\Definition\TrackDto $default_track
 * @property bool $display_contact_flag Display or hide event contact information on the registration form and registration confirmation message.
 * @property bool $display_end_time_flag Display or hide the event end time on the registration form and registration confirmation message.
 * @property bool $display_on_calendar_flag Display the event on the Event Calendar.
 * @property bool $display_time_zone_flag Display the time zone on the registration form and registration confirmation message.
 * @property string $event_calendar_url The event calendar URL.
 * @property \PHPFUI\ConstantContact\Definition\EventMetaDataDto $event_metadata Includes additional event information.
 * @property string $event_code The short code to use for the event.
 * @property array<\PHPFUI\ConstantContact\Definition\EventPromotionDto> $event_promotions List of event promotions.
 * @property \PHPFUI\ConstantContact\Definition\EventSettingsDto $event_settings
 * @property string $event_widget_url The event widget URL.
 * @property array<\PHPFUI\ConstantContact\UUID> $failed_campaign_activities List of failed campaign activities.
 * @property string $location_type Specifies if the event is physical and/or virtual, or to be determined.
 * @property bool $notify_owner_on_reg If `true`, sends an email to the event owner when a registration is made.
 * @property \PHPFUI\ConstantContact\Definition\OnlineMeetingDto $online_meeting The online meeting information for a virtual event.
 * @property string $registration_url The event registration URL.
 * @property string $status Specifies the event's current status.
 * @property string $time_zone The time zone where the event takes place.
 * @property string $time_zone_abbreviation The abbreviation to use to indicate the time zone where the event takes place.
 */
class EventDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'description' => 'string',
		'title' => 'string',
		'name' => 'string',
		'event_id' => '\PHPFUI\ConstantContact\UUID',
		'campaign_id' => '\PHPFUI\ConstantContact\UUID',
		'event_start' => 'string',
		'event_end' => 'string',
		'event_type' => 'string',
		'eso' => 'string',
		'contact' => '\PHPFUI\ConstantContact\Definition\ContactDto',
		'create_time' => 'string',
		'active_time' => 'string',
		'cancelled_time' => 'string',
		'deleted_time' => 'string',
		'last_update_time' => 'string',
		'address' => '\PHPFUI\ConstantContact\Definition\AddressDto',
		'currency_type' => 'string',
		'default_track' => '\PHPFUI\ConstantContact\Definition\TrackDto',
		'display_contact_flag' => 'bool',
		'display_end_time_flag' => 'bool',
		'display_on_calendar_flag' => 'bool',
		'display_time_zone_flag' => 'bool',
		'event_calendar_url' => 'string',
		'event_metadata' => '\PHPFUI\ConstantContact\Definition\EventMetaDataDto',
		'event_code' => 'string',
		'event_promotions' => 'array<\PHPFUI\ConstantContact\Definition\EventPromotionDto>',
		'event_settings' => '\PHPFUI\ConstantContact\Definition\EventSettingsDto',
		'event_widget_url' => 'string',
		'failed_campaign_activities' => 'array<\PHPFUI\ConstantContact\UUID>',
		'location_type' => 'string',
		'notify_owner_on_reg' => 'bool',
		'online_meeting' => '\PHPFUI\ConstantContact\Definition\OnlineMeetingDto',
		'registration_url' => 'string',
		'status' => 'string',
		'time_zone' => 'string',
		'time_zone_abbreviation' => 'string',

	];

	protected static array $maxLength = [
		'description' => 600,
		'title' => 100,
		'name' => 100,

	];

	protected static array $minLength = [
		'description' => 0,
		'name' => 1,

	];
	}
