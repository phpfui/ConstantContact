<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var int $items_total_count The total number of items to be processed.
	 * @var int $items_completed_count The number of items processed in the activity request.
	 * @var int $person_count The total number of contacts in an import contacts request.
	 * @var int $error_count The number of non-correctable errors encountered during an import contacts request.
	 * @var int $correctable_count The number of correctable errors. Correctable errors are: invalid email address format, birthday or anniversary format error, or does not have minimal contact information (no name or email address). Correctable errors are available in the product UI to correct.
	 * @var int $cannot_add_to_list_count The number of contacts that cannot be added to a list because they were previously unsubscribed, valid for contacts_file_ or json_import requests.
	 * @var int $list_count The number of lists processed in an add_ or remove_list_membership activity request.
	 */

class ActivityStatus extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'items_total_count' => 'int',
		'items_completed_count' => 'int',
		'person_count' => 'int',
		'error_count' => 'int',
		'correctable_count' => 'int',
		'cannot_add_to_list_count' => 'int',
		'list_count' => 'int',

	];
	}