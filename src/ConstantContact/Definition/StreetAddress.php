<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $kind The type of street address for the contact. Valid values are <code>home</code>, <code>work</code>, or <code>other</code>.
 * @property string $street The number and street of the contact's address.
 * @property string $city The name of the city for the contact's address.
 * @property string $state The name of the state or province for the contact's address.
 * @property string $postal_code The zip or postal code for the contact's address.
 * @property string $country The name of the country for the contact's address.
 */
class StreetAddress extends \PHPFUI\ConstantContact\Definition\Base
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
