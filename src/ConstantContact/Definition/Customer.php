<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var string $contact_email Email addresses that are associated with the Constant Contact account owner.
 * @var string $contact_phone The account owner's contact phone number (up to 25 characters in length).
 * @var string $country_code The uppercase two-letter <a href='https://en.wikipedia.org/wiki/ISO_3166-1' target='_blank'>ISO 3166-1 code</a> representing the organization's country.
 * @var string $encoded_account_id The readOnly encoded account ID that uniquely identifies the account.
 * @var string $first_name The account owner's first name.
 * @var string $last_name The account owner's last name.
 * @var string $organization_name The name of the organization that is associated with this account.
 * @var string $organization_phone The phone number of the organization that is associated with this account.
 * @var string $state_code The uppercase two letter <a href='https://en.wikipedia.org/wiki/ISO_3166-1' target='_blank'>ISO 3166-1 code</a> for the organization's state. This property is required if the <code>country_code</code> is US (United States).
 * @var string $time_zone_id The time zone that is automatically set based on the <code>state_code</code> setting; as defined in the IANA time-zone database (see http://www.iana.org/time-zones).
 * @var string $website The organization's website URL.
 * @var \PHPFUI\ConstantContact\Definition\PhysicalAddress $physical_address
 * @var \PHPFUI\ConstantContact\Definition\CompanyLogo $company_logo Used to include an existing company logo in the response body. If a company logo does not exist, nothing is returned in the response body. This property is optional.
 */
class Customer extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_email' => 'string',
		'contact_phone' => 'string',
		'country_code' => 'string',
		'encoded_account_id' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'organization_name' => 'string',
		'organization_phone' => 'string',
		'state_code' => 'string',
		'time_zone_id' => 'string',
		'website' => 'string',
		'physical_address' => '\PHPFUI\ConstantContact\Definition\PhysicalAddress',
		'company_logo' => '\PHPFUI\ConstantContact\Definition\CompanyLogo',

	];

	protected static array $maxLength = [
		'contact_phone' => 25,

	];
	}
