<?php

namespace PHPFUI\ConstantContact\Definition;

class Provision extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $contact_email A valid email address to associate with the client account.
	 * @var string $contact_phone The contact phone number to associate with the client account.
	 * @var string $country_code The two-letter country code (ISO 3166-1 code) that specifies the country in which the client resides.
	 * @var string $organization_name The name of organization that identifies the client account.
	 * @var string $organization_phone The organization phone number. To set the organization phone number using the user interface, select <b>My Settings</b> and in the <b>Organization Information</b> section, select <b>Edit Organization Information</b>.
	 * @var string $state_code The two-letter state code that represents the US state (<code>country_code</code> is <code>US</code> ) or Canadian province (<code>country_code</code> is <code>CA</code>) where the client's organization is physically located. Leave the <code>state_code</code> blank for non-US states and Canadian provinces.
	 * @var string $time_zone_id The offical time zone to use to represent the physical location associated with the client account.
	 * @var string $website The client's website URL. Specifying the website URL eliminates the need for clients to provide that information. Requires a valid URL starting with http:// or https://.
	 * @var string $login_name A unique login name to associate with the client account. The name must only contain alphanumeric characters and '-', '_', '@','.','+'.
	 * @var string $password Required if not using Single Sign On (SSO) or external authenticator. The password to associate with the client account. Passwords must be a minimum of six characters in length and have no spaces. The password is not returned in the response payload for security reasons. If using SSO authentication, use <code>external_provider</code> and <code>external_id</code> instead of <code>password</code>.
	 * @var string $first_name The client account owner's first name.
	 * @var string $last_name The client account owner's last name.
	 * @var string $partner_account_id The unique client account identifier that partners define and use for billing and reporting purposes.
	 * @var string $billing_locale The currency to use when billing the client account. Valid values are: <code>en_US</code> (default, US Dollars) or <code>en_GB</code> (British Pounds).
	 * @var bool $managed_site_owner By default, if the client account is setup as a managed account <code>managed_site_owner</code> is automatically set to <code>true</code> and attempting to override the setting with <code>false</code> is ignored. This helps to avoid getting an account into an unknown state.
	 * @var bool $enable_single_billing If a partner account is setup to allow for single billing and the <code>managed_site_owner</code> property is set to <code>true</code>, use this property to enable the single billing feature for the client account. See your account manager for more information.
	 * @var bool $gdpr_opt_out When creating accounts for users who have opted-out of any marketing communications, set  the <code> gdpr_opt_out</code>  to <code>true</code>  so that Constant Contact does not send any marketing communications to the account.
	 * @var string $external_id The ID used to uniquely identify the client account for the external authenticator. Do not use the <code>password</code> property when using an external authenticator.
	 * @var string $external_provider The name of the provider who externally authenticates this customer. For example, PayPal or Yahoo. Do not use the <code>password</code> property when using an external authenticator.
	 */

	protected static array $fields = [
		'contact_email' => 'string',
		'contact_phone' => 'string',
		'country_code' => 'string',
		'organization_name' => 'string',
		'organization_phone' => 'string',
		'state_code' => 'string',
		'time_zone_id' => 'string',
		'website' => 'string',
		'login_name' => 'string',
		'password' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'partner_account_id' => 'string',
		'billing_locale' => 'string',
		'managed_site_owner' => 'bool',
		'enable_single_billing' => 'bool',
		'gdpr_opt_out' => 'bool',
		'external_id' => 'string',
		'external_provider' => 'string',

	];

	protected static array $minLength = [
		'contact_phone' => 5,
		'country_code' => 2,
		'organization_name' => 1,
		'organization_phone' => 5,
		'login_name' => 6,
		'password' => 6,
		'first_name' => 2,
		'last_name' => 2,

	];

	protected static array $maxLength = [
		'contact_email' => 80,
		'contact_phone' => 25,
		'country_code' => 3,
		'organization_name' => 50,
		'organization_phone' => 25,
		'login_name' => 50,
		'password' => 80,
		'first_name' => 80,
		'last_name' => 80,
		'partner_account_id' => 80,
		'external_id' => 255,
		'external_provider' => 80,

	];
	}