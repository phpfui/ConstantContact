<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $contact_ids An array of contacts IDs.
	 * @var array $list_ids An array of list IDs ( <code>list_id</code> ).
	 * @var array $tag_ids An array of tags ( <code>tag_id</code> ).
	 * @var bool $all_active_contacts Use to identify contacts with an active status.
	 * @var bool $new_subscriber Use to identify newly subscribed contacts.
	 */

class Source extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'contact_ids' => 'array',
		'list_ids' => 'array',
		'tag_ids' => 'array',
		'all_active_contacts' => 'bool',
		'new_subscriber' => 'bool',

	];
	}