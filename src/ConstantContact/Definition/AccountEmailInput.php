<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $email_address The new email address you want to add to a Constant Contact account.
	 */

class AccountEmailInput extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'email_address' => 'string',

	];

	protected static array $maxLength = [
		'email_address' => 80,

	];
	}