<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $email_addresses The recipients of the test email as an array of email address strings. You can send a test email to up to 5 different email addresses at a time.
	 * @var string $personal_message A personal message for the recipients of the test email. Constant Contact displays this message before the email campaign activity content.
	 */

class EmailTestSendInput extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'email_addresses' => 'array',
		'personal_message' => 'string',

	];
	}