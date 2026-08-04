<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $component Name of component (`layout`).
 * @property string $cpeid Component id.
 * @property string $modifier Optional role descriptor for component.
 * @property array<\PHPFUI\ConstantContact\Definition\EditorColumn> $children
 * @property int $columns Number of columns in this layout block.
 * @property bool $reverse_stack Whether columns stack in reverse order.
 * @property bool $divided Indicates if a divider is rendered in the column.
 * @property \PHPFUI\ConstantContact\Definition\Background $background
 * @property \PHPFUI\ConstantContact\Definition\EditorRadiusProperties $corner_radius
 * @property \PHPFUI\ConstantContact\Definition\EditorBlock $block
 */
class EditorLayout extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'component' => 'string',
		'cpeid' => 'string',
		'modifier' => 'string',
		'children' => 'array<\PHPFUI\ConstantContact\Definition\EditorColumn>',
		'columns' => 'int',
		'reverse_stack' => 'bool',
		'divided' => 'bool',
		'background' => '\PHPFUI\ConstantContact\Definition\Background',
		'corner_radius' => '\PHPFUI\ConstantContact\Definition\EditorRadiusProperties',
		'block' => '\PHPFUI\ConstantContact\Definition\EditorBlock',

	];
	}
