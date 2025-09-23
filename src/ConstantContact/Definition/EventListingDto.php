<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $event_id The unique identifier for the event.
 * @property string $title The title of the event.
 * @property string $description The description of the event.
 * @property string $start_time The start time of the event in UTC format.
 * @property string $end_time The end time of the event in UTC format.
 * @property string $status The current status of the event.
 * @property string $registration_url The URL for event registration
 * @property string $name The name of the event.
 * @property string $event_type Use to specify the type of event.
 * @property string $location_type Specifies if this is a physical or virtual event (of both), or if the location is to be specified in the future.
 * @property string $time_zone_type The type of time zone.
 * @property \PHPFUI\ConstantContact\Definition\AddressDto $address
 * @property \PHPFUI\ConstantContact\Definition\EventRegistrationSummaryMetricDto $event_registration_summary_metrics
 * @property string $create_time The create time of the event in UTC format.
 */
class EventListingDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'event_id' => 'string',
		'title' => 'string',
		'description' => 'string',
		'start_time' => 'string',
		'end_time' => 'string',
		'status' => 'string',
		'registration_url' => 'string',
		'name' => 'string',
		'event_type' => 'string',
		'location_type' => 'string',
		'time_zone_type' => 'string',
		'address' => '\PHPFUI\ConstantContact\Definition\AddressDto',
		'event_registration_summary_metrics' => '\PHPFUI\ConstantContact\Definition\EventRegistrationSummaryMetricDto',
		'create_time' => 'string',

	];
	}
