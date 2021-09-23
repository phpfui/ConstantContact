<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var int $lists_count The total number of contact lists.
	 */

class ContactListArray extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'lists' => 'array',
		'lists_count' => 'int',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\PagingLinks',

	];
	}