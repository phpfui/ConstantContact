<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $email The email address of the contact. This method identifies each unique contact using their email address.
 * @property string $first_name The first name of the contact.
 * @property string $last_name The last name of the contact.
 * @property string $job_title The job title of the contact.
 * @property string $company_name The name of the company where the contact works.
 * @property int $birthday_month The month value for the contact's birthday. Valid values are from 1 through 12. The <code>birthday_month</code> property is required if you use <code>birthday_day</code>.
 * @property int $birthday_day The day value for the contact's birthday. Valid values are from 1 through 31. The <code>birthday_day</code> property is required if you use <code>birthday_month</code>.
 * @property string $anniversary The anniversary date for the contact. For example, this value could be the date when the contact first became a customer of an organization in Constant Contact. Valid date formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY, or M-DD-YYYY.
 * @property string $phone The primary phone number for the contact. Use this field to add the default kind of phone number to the imported contact's phone number. Default <code>kind</code> is <code>other</code>.
 * @property string $home_phone The home phone number for the contact.
 * @property string $work_phone The work phone number for the contact.
 * @property string $mobile_phone The mobile phone number for the contact.
 * @property string $other_phone A phone number for the contact.
 * @property string $street Line one of the primary street address for the contact. Use this field to add the default kind of street to the imported contact's street address. The default <code>kind</code> is <code>home</code>. which maps to the <code>street_addresses</code> array` in the response.
 * @property string $street2 Line two of the primary street address for the contact. This value is automatically appended to the <code>street</code> value. Use this field to add the default kind for line two of the street address to the imported contact's address. The default <code>kind</code> is <code>other</code>.
 * @property string $city The name of the primary city for the contact. Use this field to add the default kind of city to the imported contact's home address. The default <code>kind</code> is <code>home</code>.
 * @property string $state The name of the primary state or province for the contact. Use this field to add the default kind of state to the imported contact's home address. The default <code>kind</code> is <code>home</code>.
 * @property string $zip The zip or postal code associated with the contact's primary address. Use this field to add the default kind of zip to the imported contact's street address. The default <code>kind</code> is <code>home</code>.
 * @property string $country The name of the primary country where the contact is located. Use this field to add the default kind of country to the imported contact's street address. The default <code>kind</code> is <code>home</code>.
 * @property string $home_street Line one of the home street address for the contact.
 * @property string $home_street2 Line two of the home street address for the contact. This value is automatically appended to the <code>home_street</code> value.
 * @property string $home_city The name of the city where the contact lives.
 * @property string $home_state The name of the home state or province where the contact lives.
 * @property string $home_zip The zip or postal code associated with the contact's home address.
 * @property string $home country The name of the country where the contact lives.
 * @property string $work_street Line one of the work street address for the contact.
 * @property string $work_street2 Line two of the work street address for the contact. This value is automatically appended to the <code>work_street</code> value.
 * @property string $work_city The name of the city where the contact works.
 * @property string $work_state The name of the state or province where the contact works.
 * @property string $work_zip The zip or postal code associated with the contact's work address.
 * @property string $work_country The name of the country where the contact works.
 * @property string $other_street Line one of the other street address for the contact.
 * @property string $other_street2 Line two of the other street address for the contact. This value is automatically appended to the <code>other_street</code> value.
 * @property string $other_city The name of another city where the contact is located.
 * @property string $other_state The name of another state or province where the contact is located.
 * @property string $other_zip The zip or postal code associated with the contact's other address.
 * @property string $other_country The name of another country where the contact is located.
 * @property string $cf:custom_field_name The name of this property is dynamic based on the custom fields you want to import. Use a key-value pair where the key is an existing custom field name prefixed with <code>cf:</code>, and the value is a custom field string value. For example, if you have a custom field named <code>first_name</code> you can use <code>"cf:first_name":"Joe"</code>. Each contact can contain up to 25 different custom fields.
 */
class JsonImportContact extends \PHPFUI\ConstantContact\Definition\Base
	{
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
		'home_phone' => 'string',
		'work_phone' => 'string',
		'mobile_phone' => 'string',
		'other_phone' => 'string',
		'street' => 'string',
		'street2' => 'string',
		'city' => 'string',
		'state' => 'string',
		'zip' => 'string',
		'country' => 'string',
		'home_street' => 'string',
		'home_street2' => 'string',
		'home_city' => 'string',
		'home_state' => 'string',
		'home_zip' => 'string',
		'home country' => 'string',
		'work_street' => 'string',
		'work_street2' => 'string',
		'work_city' => 'string',
		'work_state' => 'string',
		'work_zip' => 'string',
		'work_country' => 'string',
		'other_street' => 'string',
		'other_street2' => 'string',
		'other_city' => 'string',
		'other_state' => 'string',
		'other_zip' => 'string',
		'other_country' => 'string',
		'cf:custom_field_name' => 'string',

	];

	protected static array $maxLength = [
		'email' => 50,
		'first_name' => 50,
		'last_name' => 50,
		'job_title' => 50,
		'company_name' => 50,
		'phone' => 50,
		'home_phone' => 50,
		'work_phone' => 50,
		'mobile_phone' => 50,
		'other_phone' => 50,
		'street' => 255,
		'street2' => 255,
		'city' => 50,
		'state' => 50,
		'zip' => 50,
		'country' => 50,
		'home_street' => 255,
		'home_street2' => 255,
		'home_city' => 50,
		'home_state' => 50,
		'home_zip' => 50,
		'home country' => 50,
		'work_street' => 255,
		'work_street2' => 255,
		'work_city' => 50,
		'work_state' => 50,
		'work_zip' => 50,
		'work_country' => 50,
		'other_street' => 255,
		'other_street2' => 255,
		'other_city' => 50,
		'other_state' => 50,
		'other_zip' => 50,
		'other_country' => 50,
		'cf:custom_field_name' => 255,

	];
	}
