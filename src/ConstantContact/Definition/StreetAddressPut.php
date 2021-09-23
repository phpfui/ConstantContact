<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $kind Describes the type of address; valid values are home, work, or other.
	 * @var string $street Number and street of the address.
	 * @var string $city The name of the city where the contact lives.
	 * @var string $state The name of the state or province where the contact lives.
	 * @var string $postal_code The zip or postal code of the contact.
	 * @var string $country The name of the country where the contact lives.
	 */

class StreetAddressPut extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'kind' => ['home', 'work', 'other'],
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