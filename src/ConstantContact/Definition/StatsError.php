<?php

namespace PHPFUI\ConstantContact\Definition;

class StatsError extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $error_key The unique error key.
	 * @var string $error_message A error description.
	 */

	protected static array $fields = [
		'error_key' => 'string',
		'error_message' => 'string',

	];
	}