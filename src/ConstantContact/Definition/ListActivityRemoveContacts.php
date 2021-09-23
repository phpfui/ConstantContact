<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var PHPFUI\ConstantContact\Definition\Source $source The <code>source</code> object specifies which contacts to remove from your targeted lists using one of three mutually exclusive properties.
	 * @var array $list_ids Specifies which lists (up to 50) to remove your source contacts from.
	 */

class ListActivityRemoveContacts extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'source' => 'PHPFUI\\ConstantContact\\Definition\\Source',
		'list_ids' => 'array',

	];
	}