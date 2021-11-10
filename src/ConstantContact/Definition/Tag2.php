<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var \PHPFUI\ConstantContact\UUID $tag_id The ID that uniquely identifies a tag (UUID format)
	 * @var string $name The unique tag name.
	 * @var int $contacts_count The total number of contacts who are assigned this tag.
	 * @var DateTime $created_at The system generated date and time when the tag was created (ISO-8601 format).
	 * @var DateTime $updated_at The system generated date and time when the tag was last updated (ISO-8601 format).
	 * @var string $tag_source The source used to tag contacts.
	 */

class Tag2 extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'tag_id' => '\PHPFUI\ConstantContact\UUID',
		'name' => 'string',
		'contacts_count' => 'int',
		'created_at' => 'DateTime',
		'updated_at' => 'DateTime',
		'tag_source' => 'string',

	];
	}