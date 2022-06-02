<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\ContactXref> $xrefs An array of cross-referenced V3 API <code>contact_id</code> and V2 API <code>sequence_id</code> values. Response is sorted ascending by <code>sequence_id</code>.
 */
class ContactXrefs extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'xrefs' => 'array<\PHPFUI\ConstantContact\Definition\ContactXref>',

	];

	protected static array $maxLength = [
		'xrefs' => 500,

	];
	}
