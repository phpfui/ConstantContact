<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $component Name of component (`shellPanel`).
 * @property string $cpeid Component id.
 * @property string $modifier Optional role descriptor for this panel (e.g. footer).
 * @property array<\PHPFUI\ConstantContact\Definition\EditorLayout> $children
 * @property bool $render Whether panel is rendered.
 * @property \PHPFUI\ConstantContact\Definition\Width $width
 * @property \PHPFUI\ConstantContact\Definition\EditorPaddingProperties $padding
 * @property \PHPFUI\ConstantContact\Definition\Background $background
 * @property \PHPFUI\ConstantContact\Definition\Border $border
 * @property int $corner_radius Corner radius property for the shell panel. Controls if the component renders with rounded corners.
 */
class EditorShellPanel extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'component' => 'string',
		'cpeid' => 'string',
		'modifier' => 'string',
		'children' => 'array<\PHPFUI\ConstantContact\Definition\EditorLayout>',
		'render' => 'bool',
		'width' => '\PHPFUI\ConstantContact\Definition\Width',
		'padding' => '\PHPFUI\ConstantContact\Definition\EditorPaddingProperties',
		'background' => '\PHPFUI\ConstantContact\Definition\Background',
		'border' => '\PHPFUI\ConstantContact\Definition\Border',
		'corner_radius' => 'int',

	];
	}
