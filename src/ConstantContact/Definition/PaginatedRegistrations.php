<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\Definition\RegistrationsLinks $_links
 * @property string $next_cursor Use to get the next page of results.
 * @property string $prev_cursor Use to get the previous page of results.
 * @property array<\PHPFUI\ConstantContact\Definition\RegistrantInformationLiteDto> $records
 * @property int $total_records The total number of resulting records.
 */
class PaginatedRegistrations extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'_links' => '\PHPFUI\ConstantContact\Definition\RegistrationsLinks',
		'next_cursor' => 'string',
		'prev_cursor' => 'string',
		'records' => 'array<\PHPFUI\ConstantContact\Definition\RegistrantInformationLiteDto>',
		'total_records' => 'int',

	];
	}
