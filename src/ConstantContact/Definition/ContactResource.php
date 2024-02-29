<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $contact_id Unique ID for each contact resource
 * @property \PHPFUI\ConstantContact\Definition\EmailAddress $email_address
 * @property string $first_name The first name of the contact.
 * @property string $last_name The last name of the contact.
 * @property string $job_title The job title of the contact.
 * @property string $company_name The name of the company where the contact works.
 * @property int $birthday_month The month value for the contact's birthday. Valid values are from 1 through 12. You must use this property with <code>birthday_month</code>.
 * @property int $birthday_day The day value for the contact's birthday. Valid values are from 1 through 12. You must use this property with <code>birthday_day</code>.
 * @property string $anniversary The anniversary date for the contact. For example, this value could be the date when the contact first became a customer of an organization in Constant Contact. Valid date formats are MM/DD/YYYY, M/D/YYYY, YYYY/MM/DD, YYYY/M/D, YYYY-MM-DD, YYYY-M-D,M-D-YYYY, or M-DD-YYYY.
 * @property string $update_source Identifies who last updated the contact; valid values are  <code>Contact</code> or <code>Account</code>.
 * @property string $create_source Describes who added the contact; valid values are <code>Contact</code> or <code>Account</code>. Your integration must accurately identify <code>create_source</code> for compliance reasons; value is set when contact is created.
 * @property \PHPFUI\ConstantContact\DateTime $created_at System generated date and time that the resource was created, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $updated_at System generated date and time that the contact was last updated, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\Date $deleted_at For deleted contacts (<code>email_address</code> contains <code>opt_out_source</code> and <code>opt_out_date</code>), shows the date of deletion.
 * @property array<\PHPFUI\ConstantContact\Definition\ContactCustomField> $custom_fields Array of up to 25 <code>custom_field</code> subresources.
 * @property array<\PHPFUI\ConstantContact\Definition\PhoneNumber> $phone_numbers Array of up to 3 <code>phone_numbers</code> subresources.
 * @property array<\PHPFUI\ConstantContact\Definition\StreetAddress> $street_addresses Array of up to 3 <code>street_addresses</code> subresources.
 * @property array<\PHPFUI\ConstantContact\UUID> $list_memberships Array of up to 50 <code>list_ids</code> to which the contact is subscribed.
 * @property array<\PHPFUI\ConstantContact\UUID> $taggings Array of tags (<code>tag_id</code>) assigned to the contact, up to a maximum of 50.
 * @property array<\PHPFUI\ConstantContact\Definition\Note> $notes An array of notes about the contact listed by most recent note first.
 * @property \PHPFUI\ConstantContact\Definition\SmsChannel $sms_channel Includes SMS channel and consent details.
 */
class ContactResource extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_id' => '\PHPFUI\ConstantContact\UUID',
		'email_address' => '\PHPFUI\ConstantContact\Definition\EmailAddress',
		'first_name' => 'string',
		'last_name' => 'string',
		'job_title' => 'string',
		'company_name' => 'string',
		'birthday_month' => 'int',
		'birthday_day' => 'int',
		'anniversary' => 'string',
		'update_source' => 'string',
		'create_source' => 'string',
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',
		'deleted_at' => '\PHPFUI\ConstantContact\Date',
		'custom_fields' => 'array<\PHPFUI\ConstantContact\Definition\ContactCustomField>',
		'phone_numbers' => 'array<\PHPFUI\ConstantContact\Definition\PhoneNumber>',
		'street_addresses' => 'array<\PHPFUI\ConstantContact\Definition\StreetAddress>',
		'list_memberships' => 'array<\PHPFUI\ConstantContact\UUID>',
		'taggings' => 'array<\PHPFUI\ConstantContact\UUID>',
		'notes' => 'array<\PHPFUI\ConstantContact\Definition\Note>',
		'sms_channel' => '\PHPFUI\ConstantContact\Definition\SmsChannel',

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
