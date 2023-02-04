<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\Definition\EmailAddressPut $email_address
 * @property string $first_name The contact's first name
 * @property string $last_name The contact's last name
 * @property string $job_title The contact's job title
 * @property string $company_name Name of the company the contact works for.
 * @property int $birthday_month Accepts values from 1-12; must be used with <code>birthday_day</code>
 * @property int $birthday_day Accepts values from 1-31; must be used with <code>birthday_month</code>
 * @property string $anniversary The anniversary date; Accepted formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D, MM-DD-YYYY, M-D-YYYY
 * @property string $update_source Identifies who last updated the contact; valid values are <code>Contact</code> or <code>Account</code>.
 * @property array<\PHPFUI\ConstantContact\Definition\ContactCustomField> $custom_fields Array of up to 25 <code>custom_field</code> subresources.
 * @property array<\PHPFUI\ConstantContact\Definition\PhoneNumberPut> $phone_numbers Array of up to 3 <code>phone_numbers</code> subresources.
 * @property array<\PHPFUI\ConstantContact\Definition\StreetAddressPut> $street_addresses Array of up to 3 <code>street_addresses</code> subresources.
 * @property array<\PHPFUI\ConstantContact\UUID> $list_memberships Array of up to 50 <code>list_ids</code> to which the contact is subscribed.
 * @property array<\PHPFUI\ConstantContact\UUID> $taggings Array of tags (<code>tag_id</code>) assigned to the contact, up to a maximum of 50.
 * @property array<\PHPFUI\ConstantContact\Definition\Note> $notes An array of notes about the contact listed by most recent note first.
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
		'phone_numbers' => 3,
		'street_addresses' => 3,
		'list_memberships' => 50,
		'taggings' => 50,
		'notes' => 150,

	];
	}
