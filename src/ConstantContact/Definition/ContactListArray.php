<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\ContactList> $lists
 * @property int $lists_count The total number of contact lists.
 * @property \PHPFUI\ConstantContact\Definition\PagingLinks $_links
 */
class ContactListArray extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'lists' => 'array<\PHPFUI\ConstantContact\Definition\ContactList>',
		'lists_count' => 'int',
		'_links' => '\PHPFUI\ConstantContact\Definition\PagingLinks',

	];
	}
