<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array $email_addresses Array of email addresses to unsubscribe.
 * @property string $update_source Required parameter to specify the update source performing the unsubscribe.
 * @property string $opt_out_reason Optional parameter to specify the reason for the unsubscribe.
 * @property bool $delete_contacts Optional parameter to specify if the contact(s) should be soft-deleted as part of the unsubscribe.
 * @property bool $global_unsubscribe Optional parameter to specify if the contact's email address should be unsubscribed from all partner child accounts. When specified only a single email address in the `email_addresses` array can be specified.
 */
class PartnerAccountsContactsUnsubscribe extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'email_addresses' => 'array',
		'update_source' => ['Account', 'Contact', 'System'],
		'opt_out_reason' => 'string',
		'delete_contacts' => 'bool',
		'global_unsubscribe' => 'bool',

	];

	protected static array $maxLength = [
		'opt_out_reason' => 255,

	];
	}
