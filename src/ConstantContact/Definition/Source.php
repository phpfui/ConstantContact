<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var array[\PHPFUI\ConstantContact\UUID][500] $contact_ids An array of contacts IDs.
 * @var array[\PHPFUI\ConstantContact\UUID][50] $list_ids An array of list IDs ( <code>list_id</code> ).
 * @var array[\PHPFUI\ConstantContact\UUID][50] $tag_ids An array of tags ( <code>tag_id</code> ).
 * @var bool $all_active_contacts Use to identify contacts with an active status.
 * @var bool $new_subscriber Use to identify newly subscribed contacts.
 */
class Source extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_ids' => 'array[\PHPFUI\ConstantContact\UUID][500]',
		'list_ids' => 'array[\PHPFUI\ConstantContact\UUID][50]',
		'tag_ids' => 'array[\PHPFUI\ConstantContact\UUID][50]',
		'all_active_contacts' => 'bool',
		'new_subscriber' => 'bool',

	];
	}
