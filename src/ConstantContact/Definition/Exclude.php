<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $contact_ids Identifies the contacts, by <code>contact_id</code>, to exclude from the add or remove tags activity.
	 */

class Exclude extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'contact_ids' => 'array',

	];
	}