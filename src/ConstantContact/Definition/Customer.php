<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $contact_email Email addresses that are associated with the Constant Contact account owner.
 * @property string $contact_phone The account owner's contact phone number (up to 25 characters in length).
 * @property string $country_code The uppercase two-letter <a href='https://en.wikipedia.org/wiki/ISO_3166-1' target='_blank'>ISO 3166-1 code</a> representing the organization's country.
 * @property string $encoded_account_id The readOnly encoded account ID that uniquely identifies the account.
 * @property string $encoded_partner_id The encoded partner id that identifies which Constant Contact partner provisioned the account.
 * @property string $first_name The account owner's first name.
 * @property string $last_name The account owner's last name.
 * @property string $organization_name The name of the organization that is associated with this account.
 * @property string $organization_phone The phone number of the organization that is associated with this account.
 * @property string $state_code The uppercase two letter <a href='https://en.wikipedia.org/wiki/ISO_3166-1' target='_blank'>ISO 3166-1 code</a> for the organization's state. This property is required if the <code>country_code</code> is US (United States).
 * @property string $time_zone_id The time zone that is automatically set based on the <code>state_code</code> setting; as defined in the IANA time-zone database (see http://www.iana.org/time-zones).
 * @property string $website The organization's website URL.
 * @property \PHPFUI\ConstantContact\Definition\PhysicalAddress $physical_address
 * @property \PHPFUI\ConstantContact\Definition\CompanyLogo $company_logo Used to include an existing company logo in the response body. If a company logo does not exist, nothing is returned in the response body. This property is optional.
 */
class Customer extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_email' => 'string',
		'contact_phone' => 'string',
		'country_code' => 'string',
		'encoded_account_id' => 'string',
		'encoded_partner_id' => 'string',
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

	protected static array $requiredFields = [
		'address_line1',
		'city',
		'country_code',

	];
	}
