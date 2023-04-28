<?php

namespace Tests\Fixtures;

class Type extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'boolean' => 'bool',
		'integer' => 'int',
		'string' => 'string',
		'enum' => ['primary_email', 'permalink', 'resend'],
		'array' => 'array',
		'float' => 'float',
		'ucEnum' => ['DRAFT', 'SCHEDULED', 'EXECUTING', 'DONE', 'ERROR', 'REMOVED'],
		'intEnum' => [1, 2, 3, 4, 5],
		'class' => 'Tests\\Fixtures\\ClassTester',
		'classArray' => 'array<\\Tests\\Fixtures\\ClassTester>',
		'classArraySize' => 'array<\\Tests\\Fixtures\\ClassTester>',
		'classArraySizeMin' => 'array<\\Tests\\Fixtures\\ClassTester>',
	];

	protected static array $maxLength = [
		'string' => 50,
		'classArraySize' => 3,
	];

	protected static array $minLength = [
		'string' => 10,
		'classArraySizeMin' => 2,
	];
	}
