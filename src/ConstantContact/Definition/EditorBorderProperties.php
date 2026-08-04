<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property bool $display Boolean indicating if the border is rendered
 * @property int $width Border width in px as an integer
 * @property string $color Border color hex code
 * @property \PHPFUI\ConstantContact\Definition\EditorPadding $padding
 * @property int $corner_radius Corner radius of border. Applies to button components.
 * @property string $style
 */
class EditorBorderProperties extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'display' => 'bool',
		'width' => 'int',
		'color' => 'string',
		'padding' => '\PHPFUI\ConstantContact\Definition\EditorPadding',
		'corner_radius' => 'int',
		'style' => 'string',

	];
	}
