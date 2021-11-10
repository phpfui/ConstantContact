<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var int $lists_count The total number of contact lists.
 */
class ContactListArray extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'lists' => 'array[\PHPFUI\ConstantContact\Definition\ContactList2]',
		'lists_count' => 'int',
		'_links' => '\PHPFUI\ConstantContact\Definition\PagingLinks',

	];
	}
