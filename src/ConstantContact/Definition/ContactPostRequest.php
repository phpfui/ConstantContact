<?php

namespace PHPFUI\ConstantContact\Definition;

class ContactPostRequest extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $first_name The first name of the contact.
	 * @var string $last_name The last name of the contact.
	 * @var string $job_title The job title of the contact.
	 * @var string $company_name The name of the company where the contact works.
	 * @var string $create_source Describes who added the contact; valid values are <code>Contact</code> or <code>Account</code>. Your integration must accurately identify <code>create_source</code> for compliance reasons; value is set on POST, and is read-only going forward.
	 * @var int $birthday_month The month value for the contact's birthday. Valid values are from 1 through 12. The <code>birthday_month</code> property is required if you use <code>birthday_day</code>.
	 * @var int $birthday_day The day value for the contact's birthday. Valid values are from 1 through 31. The <code>birthday_day</code> property is required if you use <code>birthday_month</code>.
	 * @var string $anniversary The anniversary date for the contact. For example, this value could be the date when the contact first became a customer of an organization in Constant Contact. Valid date formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY, or M-DD-YYYY.
	 * @var array $custom_fields Array of up to 25 <code>custom_field</code> key value pairs.
	 * @var array $phone_numbers Array of up to 2 phone_numbers subresources.
	 * @var array $street_addresses Array of street_addresses subresources. A contact can have 1 street address.
	 * @var array $list_memberships Array of list_id's to which the contact is being subscribed, up to a maximum of 50.
	 * @var array $taggings Array of tags (<code>tag_id</code>) assigned to the contact, up to a maximum of 50.
	 * @var array $notes An array of notes about the contact.
	 */

	protected static array $fields = [
		'email_address' => 'PHPFUI\\ConstantContact\\Definition\\EmailAddressPost',
		'first_name' => 'string',
		'last_name' => 'string',
		'job_title' => 'string',
		'company_name' => 'string',
		'create_source' => ['Account', 'Contact'],
		'birthday_month' => 'int',
		'birthday_day' => 'int',
		'anniversary' => 'string',
		'custom_fields' => 'array',
		'phone_numbers' => 'array',
		'street_addresses' => 'array',
		'list_memberships' => 'array',
		'taggings' => 'array',
		'notes' => 'array',

	];

	protected static array $maxLength = [
		'first_name' => 50,
		'last_name' => 50,
		'job_title' => 50,
		'company_name' => 50,
		'anniversary' => 10,

	];
	}