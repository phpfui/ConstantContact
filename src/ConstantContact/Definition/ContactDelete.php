<?php

namespace PHPFUI\ConstantContact\Definition;

class ContactDelete extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var array $contact_ids Specify up to 500 contacts by <code>contact_id</code> to delete; mutually exclusive with <code>list_ids</code>.
	 * @var array $list_ids The contacts on the lists (up to 50) specified will be deleted; mutually exclusive with <code>contact_ids</code>.
	 */

	protected static array $fields = [
		'contact_ids' => 'array',
		'list_ids' => 'array',

	];
	}