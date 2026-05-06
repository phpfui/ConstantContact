<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $page The current 0-based page number.
 * @property int $size The page size (the number of results returned in this response).
 * @property int $total_elements The total number of results available across all pages.
 * @property int $total_pages The total number of pages available based on the current page size.
 */
class PageMetadataDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'page' => 'int',
		'size' => 'int',
		'total_elements' => 'int',
		'total_pages' => 'int',

	];

	protected static array $requiredFields = [
		'page',
		'size',
		'total_elements',
		'total_pages',

	];
	}
