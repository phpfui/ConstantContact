<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @var array<\PHPFUI\ConstantContact\Definition\ContactResource> $contacts
 * @var int $contacts_count Total number of contacts in the response.
 * @var \PHPFUI\ConstantContact\Definition\PagingLinks $_links
 * @var string $status If you use the <code>segment_id</code> query parameter to filter results based on a segment, this property indicates that the V3 API accepted your request and is still processing it.
 */
class Contacts extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contacts' => 'array<\PHPFUI\ConstantContact\Definition\ContactResource>',
		'contacts_count' => 'int',
		'_links' => '\PHPFUI\ConstantContact\Definition\PagingLinks',
		'status' => ['processing'],

	];
	}
