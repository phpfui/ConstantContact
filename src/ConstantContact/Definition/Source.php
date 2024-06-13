<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\UUID> $contact_ids An array of contacts IDs.
 * @property array<\PHPFUI\ConstantContact\UUID> $list_ids An array of list IDs ( <code>list_id</code> ).
 * @property array<\PHPFUI\ConstantContact\UUID> $tag_ids An array of tags ( <code>tag_id</code> ).
 * @property bool $all_active_contacts Use to identify contacts with an active (billable) status.
 * @property bool $new_subscriber Use to identify newly subscribed contacts.
 */
class Source extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_ids' => 'array<\PHPFUI\ConstantContact\UUID>',
		'list_ids' => 'array<\PHPFUI\ConstantContact\UUID>',
		'tag_ids' => 'array<\PHPFUI\ConstantContact\UUID>',
		'all_active_contacts' => 'bool',
		'new_subscriber' => 'bool',

	];

	protected static array $maxLength = [
		'contact_ids' => 500,
		'list_ids' => 50,
		'tag_ids' => 50,

	];
	}
