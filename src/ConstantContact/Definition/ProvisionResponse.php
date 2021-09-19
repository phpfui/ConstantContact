<?php

namespace PHPFUI\ConstantContact\Definition;

class ProvisionResponse extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $encoded_account_id The system generated ID used to uniquely identify a client account.
	 * @var string $provision_uuid The system generated ID used to uniquely identify the provisioning of a client account.
	 */

	protected static array $fields = [
		'encoded_account_id' => 'string',
		'provision_uuid' => 'string',

	];
	}