<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\UUID> $list_ids Array of list id values. Constant Contact adds the resubscribed contact to the contact lists you provide in the array.
 */
class ContactResubscribeRequest extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'list_ids' => 'array<\PHPFUI\ConstantContact\UUID>',

	];
	}
