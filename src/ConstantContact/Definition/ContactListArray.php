<?php

namespace PHPFUI\ConstantContact\Definition;

class ContactListArray extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var int $lists_count The total number of contact lists.
	 */

	protected static array $fields = [
		'lists' => 'array',
		'lists_count' => 'int',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\PagingLinks',

	];
	}