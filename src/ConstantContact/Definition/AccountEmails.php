<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $email_address An email address associated with a Constant Contact account owner.
 * @property int $email_id The unique ID for an email address in a Constant Contact account.
 * @property string $confirm_status The confirmation status of the account email address. When you add a new email address to an account, Constant Contact automatically sends an email to that address with a link to confirm it. You can use any account email address with a <code>CONFIRMED</code> status to create an email campaign.
 * @property \PHPFUI\ConstantContact\DateTime $confirm_time The date that the email address changed to <code>CONFIRMED</code> status in ISO-8601 format.
 * @property string $confirm_source_type Describes who confirmed the email address. Valid values are:
 * <ul>
 * <li>SITE_OWNER — The Constant Contact account owner confirmed the email address.</li>
 * <li>SUPPORT — Constant Contact support staff confirmed the email address.</li>
 * <li>FORCEVERIFY — Constant Contact confirmed the email address without sending a confirmation email.</li>
 * <li>PARTNER — A Constant Contact partner confirmed the email address.</li>
 * </ul>
 * @property array $roles Specifies the current role of a confirmed email address in an account. Each email address can have multiple roles or no role. Possible role values are: <ul> <li>CONTACT — The contact email for the Constant Contact account owner. Each account can only have one <code>CONTACT</code> role email.</li> <li>BILLING — The billing address for the Constant Contact account. Each account can only have one <code>BILLING</code> role email.</li> <li>JOURNALING — An email address that Constant Contact forwards all sent email campaigns to as part of the partner journaling compliance feature.</li> <li>REPLY_TO — The contact email used in the email campaign signature. Each account can only have one <code>REPLY_TO</code> role email.</li> <li>OTHER — An email address that does not fit into the other categories.</li> </ul> You can use any confirmed email address in the email campaign <code>from_email</code> and <code>reply_to_email</code> headers.
 * @property array $pending_roles The planned role for an unconfirmed email address. Possible role values are: <ul> <li>CONTACT — The contact email for the Constant Contact account owner. Each account can only have one <code>CONTACT</code> role email.</li> <li>BILLING — The billing address for the Constant Contact account. Each account can only have one <code>BILLING</code> role email.</li> <li>JOURNALING — The email address that Constant Contact forwards all sent email campaigns to as part of the partner journaling compliance feature.</li> <li>REPLY_TO — The contact email used in the email campaign signature. Each account can only have one <code>REPLY_TO</code> role email. </li> <li>OTHER — An email address that does not fit into the other categories.</li> </ul>
 */
class AccountEmails extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'email_address' => 'string',
		'email_id' => 'int',
		'confirm_status' => 'string',
		'confirm_time' => '\PHPFUI\ConstantContact\DateTime',
		'confirm_source_type' => 'string',
		'roles' => 'array',
		'pending_roles' => 'array',

	];

	protected static array $maxLength = [
		'email_address' => 80,

	];
	}
