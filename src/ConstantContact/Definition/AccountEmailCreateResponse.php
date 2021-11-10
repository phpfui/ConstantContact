<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $email_address An email address associated with a Constant Contact account owner.
	 * @var int $email_id The unique ID for an email address in a Constant Contact account.
	 * @var string $confirm_status The confirmation status of the account email address. When you add a new email address to an account, Constant Contact automatically sends an email to that address with a link to confirm it. You can use any account email address with a <code>CONFIRMED</code> status to create an email campaign.
	 */

class AccountEmailCreateResponse extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'email_address' => 'string',
		'email_id' => 'int',
		'confirm_status' => ['CONFIRMED', 'UNCONFIRMED'],

	];

	protected static array $maxLength = [
		'email_address' => 80,

	];
	}