<?php

namespace PHPFUI\ConstantContact\Definition;

class StreetAddress extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $kind The type of street address for the contact. Valid values are home, work, or other.
	 * @var string $street The number and street of the contact's address.
	 * @var string $city The name of the city for the contact's address.
	 * @var string $state The name of the state or province for the contact's address.
	 * @var string $postal_code The zip or postal code for the contact's address.
	 * @var string $country The name of the country for the contact's address.
	 */

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