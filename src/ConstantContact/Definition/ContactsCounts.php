<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $total Total number of contacts for the account.
 * @property int $explicit Total number of contacts explicitly confirmed. Consent is obtained when you explicitly ask your potential contacts for permission to send the email (for example, using a sign-up form) and they agree. After you obtain express consent, it is good forever or until the contact opts out.
 * @property int $implicit Total number of contacts implicitly confirmed. Consent is inferred based on actions, such as having an existing business relationship (making a purchase or donation, for example). In order to maintain implied consent to comply with CASL a contact must take a business action with you at least once every two years. Under CAN-Spam there is no need to maintain implied consent, it is assumed until the receiver indicates they no longer wish to receive messages.
 * @property int $pending Total number of contacts pending confirmation. Consent is requested and pending confirmation from the contact.
 * @property int $unsubscribed Total number of unsubscribed contacts. Consent is revoked when a contact has unsubscribed.
 * @property int $new_subscriber Total number of newly subscribed contacts.
 */
class ContactsCounts extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'total' => 'int',
		'explicit' => 'int',
		'implicit' => 'int',
		'pending' => 'int',
		'unsubscribed' => 'int',
		'new_subscriber' => 'int',

	];
	}
