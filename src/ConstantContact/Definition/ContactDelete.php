<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array[\PHPFUI\ConstantContact\UUID][500] $contact_ids Specify up to 500 contacts by <code>contact_id</code> to delete; mutually exclusive with <code>list_ids</code>.
	 * @var array[\PHPFUI\ConstantContact\UUID][50] $list_ids The contacts on the lists (up to 50) specified will be deleted; mutually exclusive with <code>contact_ids</code>.
	 */

class ContactDelete extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'contact_ids' => 'array[\PHPFUI\ConstantContact\UUID][500]',
		'list_ids' => 'array[\PHPFUI\ConstantContact\UUID][50]',

	];
	}