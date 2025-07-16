<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\EventListingDto> $records List of records for the current page
 * @property string $next_cursor Use to get the next page of results.
 * @property string $prev_cursor Use to get the previous page of results.
 * @property \PHPFUI\ConstantContact\Definition\Links $_links
 * @property int $total_records Total number of records across all pages.
 */
class PaginationDtoEventListingDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'records' => 'array<\PHPFUI\ConstantContact\Definition\EventListingDto>',
		'next_cursor' => 'string',
		'prev_cursor' => 'string',
		'_links' => '\PHPFUI\ConstantContact\Definition\Links',
		'total_records' => 'int',

	];
	}
