<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $kind Describes the type of address; valid values are home, work, or other.
 * @property string $street Number and street of the address.
 * @property string $city The name of the city where the contact lives.
 * @property string $state The name of the state or province where the contact lives.
 * @property string $postal_code The zip or postal code of the contact.
 * @property string $country The name of the country where the contact lives.
 */
class StreetAddressPut extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'kind' => 'string',
		'street' => 'string',
		'city' => 'string',
		'state' => 'string',
		'postal_code' => 'string',
		'country' => 'string',

	];

	protected static array $maxLength = [
		'street' => 255,
		'city' => 50,
		'state' => 50,
		'postal_code' => 50,
		'country' => 50,

	];
	}
