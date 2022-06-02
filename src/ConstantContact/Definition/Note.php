<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $note_id The ID that uniquely identifies the note (UUID format).
 * @property \PHPFUI\ConstantContact\DateTime $created_at The date that the note was created.
 * @property string $content The content for the note.
 */
class Note extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'note_id' => '\PHPFUI\ConstantContact\UUID',
		'created_at' => '\PHPFUI\ConstantContact\DateTime',
		'content' => 'string',

	];

	protected static array $maxLength = [
		'content' => 2000,

	];
	}
