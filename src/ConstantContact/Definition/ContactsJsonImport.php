<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\JsonImportContact> $import_data An array containing the contacts to import.
 * @property array<\PHPFUI\ConstantContact\UUID> $list_ids Specify which contact lists you are adding all imported contacts to as an array of up to 50 contact <code>list_id</code> string values.
 */
class ContactsJsonImport extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'import_data' => 'array<\PHPFUI\ConstantContact\Definition\JsonImportContact>',
		'list_ids' => 'array<\PHPFUI\ConstantContact\UUID>',

	];

	protected static array $maxLength = [
		'list_ids' => 50,

	];

	protected static array $minLength = [
		'list_ids' => 1,

	];
	}
