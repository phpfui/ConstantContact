<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var string $address_line1 Line 1 of the organization's street address.
 * @var string $address_line2 Line 2 of the organization's street address.
 * @var string $address_line3 Line 3 of the organization's street address.
 * @var string $city The city where the organization is located.
 * @var string $state_code The two letter ISO 3166-1 code for the organization's state and only used if the <code>country_code</code> is <code>US</code> or <code>CA</code>. If not, exclude this property from the request body.
 * @var string $state_name Use if the state where the organization is physically located is not in the United States or Canada. If  <code>country_code</code> is  <code>US</code> or <code>CA</code>, exclude this property from the request body.
 * @var string $postal_code The postal code address (ZIP code) of the organization. This property is required if the <code>state_code</code> is <code>US</code> or <code>CA</code>, otherwise exclude this property from the request body.
 * @var string $country_code The two letter <a href='https://en.wikipedia.org/wiki/ISO_3166-1' target='_blank'>ISO 3166-1 code</a> for the organization's country.
 */
class AccountPhysicalAddress extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'address_line1' => 'string',
		'address_line2' => 'string',
		'address_line3' => 'string',
		'city' => 'string',
		'state_code' => 'string',
		'state_name' => 'string',
		'postal_code' => 'string',
		'country_code' => 'string',

	];

	protected static array $minLength = [
		'address_line1' => 1,
		'address_line2' => 1,
		'address_line3' => 1,

	];

	protected static array $maxLength = [
		'address_line1' => 80,
		'address_line2' => 80,
		'address_line3' => 80,
		'state_code' => 2,

	];
	}
