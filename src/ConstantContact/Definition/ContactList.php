<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var \PHPFUI\ConstantContact\UUID $list_id Unique ID for the contact list
 * @var string $name The name given to the contact list
 * @var string $description Text describing the list.
 * @var bool $favorite Identifies whether or not the account has favorited the contact list.
 * @var \PHPFUI\ConstantContact\DateTime $created_at System generated date and time that the resource was created, in ISO-8601 format.
 * @var \PHPFUI\ConstantContact\DateTime $updated_at Date and time that the list was last updated, in ISO-8601 format. System generated.
 * @var int $membership_count The number of contacts in the contact list.
 */
class ContactList extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'list_id' => '\PHPFUI\ConstantContact\UUID',
		'name' => 'string',
		'description' => 'string',
		'favorite' => 'bool',
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',
		'membership_count' => 'int',

	];
	}
