<?php

namespace PHPFUI\ConstantContact\Definition;

class ContactResource extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var PHPFUI\ConstantContact\UUID $contact_id Unique ID for each contact resource
	 * @var string $first_name The first name of the contact.
	 * @var string $last_name The last name of the contact.
	 * @var string $job_title The job title of the contact.
	 * @var string $company_name The name of the company where the contact works.
	 * @var int $birthday_month The month value for the contact's birthday. Valid values are from 1 through 12. You must use this property with <code>birthday_month</code>.
	 * @var int $birthday_day The day value for the contact's birthday. Valid values are from 1 through 12. You must use this property with <code>birthday_day</code>.
	 * @var string $anniversary The anniversary date for the contact. For example, this value could be the date when the contact first became a customer of an organization in Constant Contact. Valid date formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY, or M-DD-YYYY.
	 * @var string $update_source Identifies who last updated the contact; valid values are Contact or Account
	 * @var string $create_source Describes who added the contact; valid values are <code>Contact</code> or <code>Account</code>. Your integration must accurately identify <code>create_source</code> for compliance reasons; value is set when contact is created.
	 * @var DateTime $created_at System generated date and time that the resource was created, in ISO-8601 format.
	 * @var DateTime $updated_at System generated date and time that the contact was last updated, in ISO-8601 format.
	 * @var PHPFUI\ConstantContact\Date $deleted_at For deleted contacts (<code>email_address</code> contains <code>opt_out_source</code> and <code>opt_out_date</code>), shows the date of deletion.
	 * @var array $custom_fields Array of up to 25 <code>custom_field</code> key value pairs.
	 * @var array $phone_numbers Array of phone_numbers subresources. A contact can have up to 2 phone numbers.
	 * @var array $street_addresses Array of street_addresses subresources. A contact can have 1 street address.
	 * @var array $list_memberships Array of list_id's to which the contact is subscribed, up to a maximum of 50.
	 * @var array $taggings Array of tags (<code>tag_id</code>) assigned to the contact, up to a maximum of 50.
	 * @var array $notes An array of up to 150 notes about the contact.
	 */

	protected static array $fields = [
		'contact_id' => 'PHPFUI\ConstantContact\UUID',
		'email_address' => 'PHPFUI\\ConstantContact\\Definition\\EmailAddress',
		'first_name' => 'string',
		'last_name' => 'string',
		'job_title' => 'string',
		'company_name' => 'string',
		'birthday_month' => 'int',
		'birthday_day' => 'int',
		'anniversary' => 'string',
		'update_source' => ['Account', 'Contact'],
		'create_source' => ['Account', 'Contact'],
		'created_at' => 'DateTime',
		'updated_at' => 'DateTime',
		'deleted_at' => 'PHPFUI\ConstantContact\Date',
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