<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\DateTime $createdAt
 * @property string $description Description or summary of the linked page
 * @property string $image URL of the preview image for the link
 * @property string $linkId Identifier of the parent link this metadata belongs to
 * @property string $linkMetaDataId Unique identifier for this link metadata record
 * @property string $network The social network this link metadata is associated with
 * @property string $title Title of the linked page
 * @property \PHPFUI\ConstantContact\DateTime $updatedAt
 */
class LinkMetadata extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'createdAt' => '\PHPFUI\ConstantContact\DateTime',
		'description' => 'string',
		'image' => 'string',
		'linkId' => 'string',
		'linkMetaDataId' => 'string',
		'network' => 'string',
		'title' => 'string',
		'updatedAt' => '\PHPFUI\ConstantContact\DateTime',

	];
	}
