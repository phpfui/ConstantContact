<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $address_line1 Line 1 of the organization's street address.
 * @property string $address_line2 Line 2 of the organization's street address.
 * @property string $address_line3 Line 3 of the organization's street address.
 * @property string $address_optional An optional address field for the organization. Only <code>format_type</code> 3, 4, and 5 can use this property.
 * @property string $city The city where the organization sending the email campaign is located.
 * @property string $country_code The uppercase two letter <a href='https://en.wikipedia.org/wiki/ISO_3166-1' target='_blank'>ISO 3166-1 code</a> for the organization's country.
 * @property string $country_name The full name of the country where the organization sending the email is located. Automatically generated using the <code>country_code</code>.
 * @property string $organization_name The name of the organization that is sending the email campaign.
 * @property string $postal_code The postal code address (ZIP code) of the organization.
 * @property string $state_code The uppercase two letter <a href='https://en.wikipedia.org/wiki/ISO_3166-1' target='_blank'>ISO 3166-1 code</a> for the organization's state. This property is required if the <code>country_code</code> is US (United States).
 * @property string $state_name The full state name for a <code>state_code</code> that is inside the United States. Automatically generated using the <code>state_code</code>.
 * @property string $state_non_us_name The full state name for a <code>state_code</code> that is outside the United States. This property is not read only.
 */
class EmailPhysicalAddress extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'address_line1' => 'string',
		'address_line2' => 'string',
		'address_line3' => 'string',
		'address_optional' => 'string',
		'city' => 'string',
		'country_code' => 'string',
		'country_name' => 'string',
		'organization_name' => 'string',
		'postal_code' => 'string',
		'state_code' => 'string',
		'state_name' => 'string',
		'state_non_us_name' => 'string',

	];
	}
