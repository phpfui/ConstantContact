<?php

namespace PHPFUI\ConstantContact\Definition;

class Exclude extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var array $contact_ids Identifies the contacts, by <code>contact_id</code>, to exclude from the add or remove tags activity.
	 */

	protected static array $fields = [
		'contact_ids' => 'array',

	];
	}