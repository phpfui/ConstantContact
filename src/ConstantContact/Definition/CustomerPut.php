<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $contact_email The confirmed email address that is associated with the account owner.
 * @property string $contact_phone The account owner's contact phone number (up to 25 characters in length).
 * @property string $country_code The two-letter <a href='https://en.wikipedia.org/wiki/ISO_3166-1' target='_blank'>ISO 3166-1 code</a> representing the organization's country.
 * @property string $encoded_account_id The read only encoded account ID that uniquely identifies the account.
 * @property string $first_name The account owner's first name.
 * @property string $last_name The account owner's last name.
 * @property string $organization_name The name of the organization that is associated with this account.
 * @property string $organization_phone The phone number of the organization that is associated with this account.
 * @property string $state_code The two letter <a href='https://en.wikipedia.org/wiki/ISO_3166-1' target='_blank'>ISO 3166-1 code</a> used to specify the state to associate with the account. This property is required if the <code>country_code</code> is US (United States).
 * @property string $time_zone_id The time zone to use for the account; as defined in the IANA time-zone database (see http://www.iana.org/time-zones).
 * @property string $website The organization's website URL.
 */
class CustomerPut extends \PHPFUI\ConstantContact\Definition\Base
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

	];

	protected static array $maxLength = [
		'contact_phone' => 25,

	];
	}
