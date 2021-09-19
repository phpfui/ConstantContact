<?php

namespace PHPFUI\ConstantContact\Definition;

class TagAddRemoveContacts extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var PHPFUI\ConstantContact\Definition\Source $source Select the source used to identify contacts to which a tag is added or removed. Source types are mutually exclusive.
	 * @var PHPFUI\ConstantContact\Definition\Exclude $exclude Use to exclude specified contacts from being added or removed from a tag. Only applicable if the specified source is either <code>all_active_contacts</code> or <code>list_ids</code>.
	 * @var array $tag_ids An array of tags (<code>tag_id</code>) to add to all contacts meeting the specified source criteria.
	 */

	protected static array $fields = [
		'source' => 'PHPFUI\\ConstantContact\\Definition\\Source',
		'exclude' => 'PHPFUI\\ConstantContact\\Definition\\Exclude',
		'tag_ids' => 'array',

	];
	}