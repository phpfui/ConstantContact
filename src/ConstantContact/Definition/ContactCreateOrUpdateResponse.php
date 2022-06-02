<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $contact_id The unique identifier for the contact that the V3 API created or updated.
 * @property string $action Identifies if the V3 API created a new contact or updated an existing contact.
 */
class ContactCreateOrUpdateResponse extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_id' => '\PHPFUI\ConstantContact\UUID',
		'action' => ['created', 'updated'],

	];
	}
