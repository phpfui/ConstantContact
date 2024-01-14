<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Activities;

class CustomFieldsDelete extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities/custom_fields_delete');
		}

	/**
	 * Delete Custom Fields
	 *
	 * Use this endpoint to delete up to 100 custom fields for an account.
	 *
	 *
	 * @param \PHPFUI\ConstantContact\Definition\CustomFieldId100 $body An array of `custom_field_id`'s to delete.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\CustomFieldId100 $body) : array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}
	}
