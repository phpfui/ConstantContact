<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\CustomFieldResource> $custom_fields
 * @property \PHPFUI\ConstantContact\Definition\PagingLinks $_links
 */
class CustomFields extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'custom_fields' => 'array<\PHPFUI\ConstantContact\Definition\CustomFieldResource>',
		'_links' => '\PHPFUI\ConstantContact\Definition\PagingLinks',

	];

	protected static array $maxLength = [
		'custom_fields' => 100,

	];
	}
