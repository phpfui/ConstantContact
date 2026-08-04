<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $component Name of component (`column`).
 * @property string $cpeid Component id.
 * @property string $modifier Optional role descriptor for component.
 * @property array<\PHPFUI\ConstantContact\Definition\EditorDocumentChildrenDocument> $children
 * @property int $position 1-based position of this column within a multi-column layout.
 * @property int $width Percentage width of this column within its layout.
 * @property int $columns Number of columns in parent layout.
 * @property bool $divided Whether a divider is rendered between columns.
 * @property \PHPFUI\ConstantContact\Definition\Divider $divider
 * @property \PHPFUI\ConstantContact\Definition\Border $border
 * @property string $align Column alignment.
 * @property string $valign Column vertical alignment.
 * @property \PHPFUI\ConstantContact\Definition\Background $background
 * @property \PHPFUI\ConstantContact\Definition\EditorRadiusProperties $corner_radius
 */
class EditorColumn extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'component' => 'string',
		'cpeid' => 'string',
		'modifier' => 'string',
		'children' => 'array<\PHPFUI\ConstantContact\Definition\EditorDocumentChildrenDocument>',
		'position' => 'int',
		'width' => 'int',
		'columns' => 'int',
		'divided' => 'bool',
		'divider' => '\PHPFUI\ConstantContact\Definition\Divider',
		'border' => '\PHPFUI\ConstantContact\Definition\Border',
		'align' => 'string',
		'valign' => 'string',
		'background' => '\PHPFUI\ConstantContact\Definition\Background',
		'corner_radius' => '\PHPFUI\ConstantContact\Definition\EditorRadiusProperties',

	];
	}
