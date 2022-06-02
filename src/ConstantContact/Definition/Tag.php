<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $tag_id The ID that uniquely identifies a tag (UUID format)
 * @property string $name The unique tag name.
 * @property int $contacts_count The total number of contacts who are assigned this tag.
 * @property \PHPFUI\ConstantContact\DateTime $created_at The system generated date and time when the tag was created (ISO-8601 format).
 * @property \PHPFUI\ConstantContact\DateTime $updated_at The system generated date and time when the tag was last updated (ISO-8601 format).
 * @property string $tag_source The source used to tag contacts.
 */
class Tag extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'tag_id' => '\PHPFUI\ConstantContact\UUID',
		'name' => 'string',
		'contacts_count' => 'int',
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'updated_at' => '\PHPFUI\ConstantContact\DateTime',
		'tag_source' => 'string',

	];
	}
