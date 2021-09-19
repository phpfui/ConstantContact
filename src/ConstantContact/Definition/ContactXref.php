<?php

namespace PHPFUI\ConstantContact\Definition;

class ContactXref extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $sequence_id The V2 API contact unique identifier
	 * @var PHPFUI\ConstantContact\UUID $contact_id The V3 API contact unique identifier
	 */

	protected static array $fields = [
		'sequence_id' => 'string',
		'contact_id' => 'PHPFUI\ConstantContact\UUID',

	];
	}