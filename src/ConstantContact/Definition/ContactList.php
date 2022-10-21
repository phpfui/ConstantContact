<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $list_id Unique ID for the contact list
 * @property string $name The name given to the contact list
 * @property string $description Text describing the list.
 * @property bool $favorite Identifies whether or not the account has favorited the contact list.
 * @property \PHPFUI\ConstantContact\DateTime $created_at System generated date and time that the resource was created, in ISO-8601 format.
 * @property \PHPFUI\ConstantContact\DateTime $updated_at Date and time that the list was last updated, in ISO-8601 format. System generated.
 * @property \PHPFUI\ConstantContact\DateTime $deleted_at If the list was deleted, this property shows the date and time it was deleted, in ISO-8601 format. System generated.
 * @property int $membership_count The number of contacts in the contact list.
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
		'deleted_at' => '\PHPFUI\ConstantContact\DateTime',
		'membership_count' => 'int',

	];
	}
