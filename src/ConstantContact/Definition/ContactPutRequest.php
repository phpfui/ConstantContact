<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var \PHPFUI\ConstantContact\Definition\EmailAddressPut $email_address
 * @var string $first_name The contact's first name
 * @var string $last_name The contact's last name
 * @var string $job_title The contact's job title
 * @var string $company_name Name of the company the contact works for.
 * @var int $birthday_month Accepts values from 1-12; must be used with <code>birthday_day</code>
 * @var int $birthday_day Accepts values from 1-31; must be used with <code>birthday_month</code>
 * @var string $anniversary The anniversary date; Accepted formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D, MM-DD-YYYY, M-D-YYYY
 * @var string $update_source Identifies who last updated the contact; valid values are <code>Contact</code> or <code>Account</code>.
 * @var array<\PHPFUI\ConstantContact\Definition\ContactCustomField> $custom_fields Array of up to 25 custom_field subresources.
 * @var array<\PHPFUI\ConstantContact\Definition\PhoneNumberPut> $phone_numbers Array of up to 2 phone_numbers subresources.
 * @var array<\PHPFUI\ConstantContact\Definition\StreetAddressPut> $street_addresses Array of street_addresses subresources. A contact can have 1 street address.
 * @var array<\PHPFUI\ConstantContact\UUID> $list_memberships Array of up to 50 <code>list_ids</code> to which the contact is subscribed.
 * @var array<\PHPFUI\ConstantContact\UUID> $taggings Array of tags (<code>tag_id</code>) assigned to the contact, up to a maximum of 50.
 * @var array<\PHPFUI\ConstantContact\Definition\Note> $notes An array of notes about the contact listed by most recent note first.
 */
class ContactPutRequest extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'email_address' => '\PHPFUI\ConstantContact\Definition\EmailAddressPut',
		'first_name' => 'string',
		'last_name' => 'string',
		'job_title' => 'string',
		'company_name' => 'string',
		'birthday_month' => 'int',
		'birthday_day' => 'int',
		'anniversary' => 'string',
		'update_source' => ['Account', 'Contact'],
		'custom_fields' => 'array<\PHPFUI\ConstantContact\Definition\ContactCustomField>',
		'phone_numbers' => 'array<\PHPFUI\ConstantContact\Definition\PhoneNumberPut>',
		'street_addresses' => 'array<\PHPFUI\ConstantContact\Definition\StreetAddressPut>',
		'list_memberships' => 'array<\PHPFUI\ConstantContact\UUID>',
		'taggings' => 'array<\PHPFUI\ConstantContact\UUID>',
		'notes' => 'array<\PHPFUI\ConstantContact\Definition\Note>',

	];

	protected static array $maxLength = [
		'first_name' => 50,
		'last_name' => 50,
		'job_title' => 50,
		'company_name' => 50,
		'anniversary' => 10,
		'custom_fields' => 25,
		'phone_numbers' => 2,
		'list_memberships' => 50,
		'taggings' => 50,
		'notes' => 150,

	];
	}
