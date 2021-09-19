<?php

namespace Tests\Fixtures;

class TypeTest extends \PHPFUI\ConstantContact\Definition\Base
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
		'class' => 'Tests\\Fixtures\\ClassTest',
	];

	protected static array $minLength = [
		'string' => 10,
	];

	protected static array $maxLength = [
		'string' => 50,
	];

	}