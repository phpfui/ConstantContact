<?php

namespace PHPFUI\ConstantContact\Definition;

class JsonImportContact extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $email The email address of the contact. This method identifies each unique contact using their email address.
	 * @var string $first_name The first name of the contact.
	 * @var string $last_name The last name of the contact.
	 * @var string $job_title The job title of the contact.
	 * @var string $company_name The name of the company where the contact works.
	 * @var int $birthday_month The month value for the contact's birthday. Valid values are from 1 through 12. The <code>birthday_month</code> property is required if you use <code>birthday_day</code>.
	 * @var int $birthday_day The day value for the contact's birthday. Valid values are from 1 through 31. The <code>birthday_day</code> property is required if you use <code>birthday_month</code>.
	 * @var string $anniversary The anniversary date for the contact. For example, this value could be the date when the contact first became a customer of an organization in Constant Contact. Valid date formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY, or M-DD-YYYY.
	 * @var string $phone The phone number for the contact.
	 * @var string $street Line one of the street address for the contact.
	 * @var string $street2 Line two of the street address for the contact. This value is automatically appended to the <code>street</code> value.
	 * @var string $city The name of the city where the contact lives.
	 * @var string $state The name of the state or province where the contact lives.
	 * @var string $zip The zip or postal code of the contact.
	 * @var string $country The name of the country where the contact lives.
	 * @var string $cf:custom_field_name The name of this property is dynamic based on the custom fields you want to import. Use a key-value pair where the key is an existing custom field name prefixed with <code>cf:</code>, and the value is a custom field string value. For example, if you have a custom field named <code>first_name</code> you can use <code>"cf:first_name":"Joe"</code>. Each contact can contain up to 25 different custom fields.
	 */

	protected static array $fields = [
		'email' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'job_title' => 'string',
		'company_name' => 'string',
		'birthday_month' => 'int',
		'birthday_day' => 'int',
		'anniversary' => 'string',
		'phone' => 'string',
		'street' => 'string',
		'street2' => 'string',
		'city' => 'string',
		'state' => 'string',
		'zip' => 'string',
		'country' => 'string',
		'cf:custom_field_name' => 'string',

	];

	protected static array $maxLength = [
		'email' => 50,
		'first_name' => 50,
		'last_name' => 50,
		'job_title' => 50,
		'company_name' => 50,
		'phone' => 50,
		'street' => 255,
		'street2' => 255,
		'city' => 50,
		'state' => 50,
		'zip' => 50,
		'country' => 50,
		'cf:custom_field_name' => 255,

	];
	}