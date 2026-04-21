<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $org_name Organization name
 * @property string $address_line_1 Primary address line
 * @property string $address_line_2 Secondary address line
 * @property string $address_line_3 Tertiary address line
 * @property string $city City name
 * @property string $state_or_prov_code State or province code
 * @property string $state_or_prov State or province full name
 * @property string $state_non_us Non-US state designation
 * @property string $postal_code Postal or ZIP code
 * @property string $country_code ISO country code
 * @property string $country Country full name
 * @property string $address_optional Optional address field
 * @property bool $place_holder Indicates if this is a placeholder address
 */
class PhysicalAddress extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'org_name' => 'string',
		'address_line_1' => 'string',
		'address_line_2' => 'string',
		'address_line_3' => 'string',
		'city' => 'string',
		'state_or_prov_code' => 'string',
		'state_or_prov' => 'string',
		'state_non_us' => 'string',
		'postal_code' => 'string',
		'country_code' => 'string',
		'country' => 'string',
		'address_optional' => 'string',
		'place_holder' => 'bool',

	];
	}
