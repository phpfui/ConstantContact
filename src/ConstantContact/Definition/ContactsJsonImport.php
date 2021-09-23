<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $import_data An array containing the contacts to import.
	 * @var array $list_ids Specify which contact lists you are adding all imported contacts to as an array of up to 50 contact <code>list_id</code> string values.
	 */

class ContactsJsonImport extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'import_data' => 'array',
		'list_ids' => 'array',

	];
	}