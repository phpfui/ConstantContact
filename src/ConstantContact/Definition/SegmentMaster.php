<?php

namespace PHPFUI\ConstantContact\Definition;

class SegmentMaster extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $name The segment's unique descriptive name.
	 * @var int $segment_id The system generated number that uniquely identifies the segment.
	 * @var DateTime $created_at The system generated date and time that the segment was created (ISO-8601 format).
	 * @var DateTime $edited_at The system generated date and time that the segment's <code>name</code> or <code>segment_criteria</code> was last updated (ISO-8601 format).
	 */

	protected static array $fields = [
		'name' => 'string',
		'segment_id' => 'int',
		'created_at' => 'DateTime',
		'edited_at' => 'DateTime',

	];
	}