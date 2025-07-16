<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $address_type The address type. Only `EVENT` is currently supported.
 * @property string $line1 The first line of the address where the event takes place.
 * @property string $line2 The second line of the address where the event takes place.
 * @property string $city The city where the event takes place.
 * @property string $country Name of the country where the event takes place.
 * @property string $country_code The country code associated with the country where the event takes place.
 * @property string $create_time The create time of the event.
 * @property string $last_update_time The last modification time of the event.
 * @property float $latitude The latitude number indicating where the event takes place.
 * @property float $longitude The longitude number indicating where the event takes place.
 * @property string $location_name The venue name where the event takes place.
 * @property string $postal_code The address postal code.
 * @property string $state The State/Province where the event takes place.
 * @property string $state_code The state code where the event takes place.
 */
class AddressDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'address_type' => 'string',
		'line1' => 'string',
		'line2' => 'string',
		'city' => 'string',
		'country' => 'string',
		'country_code' => 'string',
		'create_time' => 'string',
		'last_update_time' => 'string',
		'latitude' => 'float',
		'longitude' => 'float',
		'location_name' => 'string',
		'postal_code' => 'string',
		'state' => 'string',
		'state_code' => 'string',

	];

	protected static array $maxLength = [
		'line1' => 80,
		'line2' => 80,
		'city' => 80,
		'country' => 128,
		'country_code' => 2,
		'location_name' => 100,
		'postal_code' => 25,
		'state' => 80,
		'state_code' => 2,

	];

	protected static array $minLength = [
		'line1' => 0,
		'line2' => 0,
		'city' => 0,
		'country' => 0,
		'country_code' => 0,
		'location_name' => 0,
		'postal_code' => 0,
		'state' => 0,
		'state_code' => 0,

	];
	}
