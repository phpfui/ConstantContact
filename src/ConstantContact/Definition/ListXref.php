<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $sequence_id The V2 API list unique identifier
	 * @var PHPFUI\ConstantContact\UUID $list_id The V3 API list unique identifier
	 */

class ListXref extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'sequence_id' => 'string',
		'list_id' => 'PHPFUI\ConstantContact\UUID',

	];
	}