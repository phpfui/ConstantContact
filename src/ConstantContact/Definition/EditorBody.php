<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $component Name of component (`body`).
 * @property string $cpeid Component id.
 * @property string $purpose Email body purpose/type.
 * @property array<\PHPFUI\ConstantContact\Definition\EditorShell> $children
 */
class EditorBody extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'component' => 'string',
		'cpeid' => 'string',
		'purpose' => 'string',
		'children' => 'array<\PHPFUI\ConstantContact\Definition\EditorShell>',

	];
	}
