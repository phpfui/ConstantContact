<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\Definition\Source $source Specifies the contacts to remove from your target list(s) using one of several mutually exclusive properties.
 * @property \PHPFUI\ConstantContact\Definition\Exclude $exclude
 * @property array<\PHPFUI\ConstantContact\UUID> $list_ids Specify up to 50 target <code>list_id</code>s from which to remove contacts.
 */
class ListActivityRemoveContacts extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'source' => '\PHPFUI\ConstantContact\Definition\Source',
		'exclude' => '\PHPFUI\ConstantContact\Definition\Exclude',
		'list_ids' => 'array<\PHPFUI\ConstantContact\UUID>',

	];
	}
