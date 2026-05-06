<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\Definition\PagedResponseLinksDto $_links Pagination links for navigating through pages of results.
 * @property array<\PHPFUI\ConstantContact\Definition\HashtagGroupDto> $hashtag_groups The current page of hashtag group results.
 * @property \PHPFUI\ConstantContact\Definition\PageMetadataDto $page Pagination metadata for the current response.
 */
class PagedHashtagGroupsDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'_links' => '\PHPFUI\ConstantContact\Definition\PagedResponseLinksDto',
		'hashtag_groups' => 'array<\PHPFUI\ConstantContact\Definition\HashtagGroupDto>',
		'page' => '\PHPFUI\ConstantContact\Definition\PageMetadataDto',

	];

	protected static array $requiredFields = [
		'_links',
		'hashtag_groups',
		'page',

	];
	}
