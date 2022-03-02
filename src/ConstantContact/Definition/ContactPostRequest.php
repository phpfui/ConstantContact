<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var \PHPFUI\ConstantContact\Definition\EmailAddressPost $email_address
 * @var string $first_name The first name of the contact.
 * @var string $last_name The last name of the contact.
 * @var string $job_title The job title of the contact.
 * @var string $company_name The name of the company where the contact works.
 * @var string $create_source Describes who added the contact; valid values are <code>Contact</code> or <code>Account</code>. Your integration must accurately identify <code>create_source</code> for compliance reasons; value is set on POST, and is read-only going forward.
 * @var int $birthday_month The month value for the contact's birthday. Valid values are from 1 through 12. The <code>birthday_month</code> property is required if you use <code>birthday_day</code>.
 * @var int $birthday_day The day value for the contact's birthday. Valid values are from 1 through 31. The <code>birthday_day</code> property is required if you use <code>birthday_month</code>.
 * @var string $anniversary The anniversary date for the contact. For example, this value could be the date when the contact first became a customer of an organization in Constant Contact. Valid date formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY, or M-DD-YYYY.
 * @var array<\PHPFUI\ConstantContact\Definition\ContactCustomField> $custom_fields Array of up to 25 <code>custom_field</code> key value pairs.
 * @var array<\PHPFUI\ConstantContact\Definition\PhoneNumberPut> $phone_numbers Array of up to 2 phone_numbers subresources.
 * @var array<\PHPFUI\ConstantContact\Definition\StreetAddressPut> $street_addresses Array of street_addresses subresources. A contact can have 1 street address.
 * @var array<\PHPFUI\ConstantContact\UUID> $list_memberships Array of list_id's to which the contact is being subscribed, up to a maximum of 50.
 * @var array<\PHPFUI\ConstantContact\UUID> $taggings Array of tags (<code>tag_id</code>) assigned to the contact, up to a maximum of 50.
 * @var array<\PHPFUI\ConstantContact\Definition\Note> $notes An array of notes about the contact.
 */
class ContactPostRequest extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'email_address' => '\PHPFUI\ConstantContact\Definition\EmailAddressPost',
		'first_name' => 'string',
		'last_name' => 'string',
		'job_title' => 'string',
		'company_name' => 'string',
		'create_source' => ['Account', 'Contact'],
		'birthday_month' => 'int',
		'birthday_day' => 'int',
		'anniversary' => 'string',
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
