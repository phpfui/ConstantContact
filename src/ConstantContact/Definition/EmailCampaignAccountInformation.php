<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $first_name Account owner's first name
 * @property string $last_name Account owner's last name
 * @property \PHPFUI\ConstantContact\Definition\PhysicalAddress $physical_address The physical address associated with the account
 * @property string $website Account website URL
 * @property string $community_screen_name Community screen name for the account
 * @property string $logo_url URL for the account logo
 * @property string $contact_email Primary contact email address
 * @property string $contact_phone Primary contact phone number
 * @property array $verified_emails List of verified email addresses. You must verify an email address before you can use it as the from address in an email.
 * @property array $all_emails List of all email addresses associated with the account
 * @property \PHPFUI\ConstantContact\Definition\MessageSettings $message_settings Default message settings for the account
 * @property string $timezone Account timezone
 * @property string $phone_prefix Phone number prefix
 * @property string $phone_remainder Phone number remainder
 * @property string $organization_phone Organization phone number
 * @property string $industry_type Industry type classification
 * @property string $locale Account locale
 * @property string $last_authenticated_email Last email address used for authentication
 * @property bool $use_source_account_images Indicates if source account images should be used
 * @property string $default_from_email Default from email address
 * @property string $reply_to_email Default reply-to email address
 */
class EmailCampaignAccountInformation extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'first_name' => 'string',
		'last_name' => 'string',
		'physical_address' => '\PHPFUI\ConstantContact\Definition\PhysicalAddress',
		'website' => 'string',
		'community_screen_name' => 'string',
		'logo_url' => 'string',
		'contact_email' => 'string',
		'contact_phone' => 'string',
		'verified_emails' => 'array',
		'all_emails' => 'array',
		'message_settings' => '\PHPFUI\ConstantContact\Definition\MessageSettings',
		'timezone' => 'string',
		'phone_prefix' => 'string',
		'phone_remainder' => 'string',
		'organization_phone' => 'string',
		'industry_type' => 'string',
		'locale' => 'string',
		'last_authenticated_email' => 'string',
		'use_source_account_images' => 'bool',
		'default_from_email' => 'string',
		'reply_to_email' => 'string',

	];
	}
