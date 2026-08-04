<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $component Name of component.
 * @property string $cpeid Component id.
 * @property string $modifier Optional role descriptor for component.
 * @property string $src URL of the image.
 * @property string $alt Image alternate text
 * @property int $width Display width in pixels.
 * @property int $height Display height in pixels.
 * @property string $width_unit Unit for width (e.g., px, %).
 * @property string $align Image alignment.
 * @property string $valign Image vertical alignment.
 * @property \PHPFUI\ConstantContact\Definition\EditorLink $link
 * @property \PHPFUI\ConstantContact\Definition\EditorPaddingProperties $padding
 * @property \PHPFUI\ConstantContact\Definition\EditorRadiusProperties $corner_radius
 * @property \PHPFUI\ConstantContact\Definition\EditorBorderProperties $border
 * @property \PHPFUI\ConstantContact\Definition\EditorBlock $block
 */
class EditorImage extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'component' => 'string',
		'cpeid' => 'string',
		'modifier' => 'string',
		'src' => 'string',
		'alt' => 'string',
		'width' => 'int',
		'height' => 'int',
		'width_unit' => 'string',
		'align' => 'string',
		'valign' => 'string',
		'link' => '\PHPFUI\ConstantContact\Definition\EditorLink',
		'padding' => '\PHPFUI\ConstantContact\Definition\EditorPaddingProperties',
		'corner_radius' => '\PHPFUI\ConstantContact\Definition\EditorRadiusProperties',
		'border' => '\PHPFUI\ConstantContact\Definition\EditorBorderProperties',
		'block' => '\PHPFUI\ConstantContact\Definition\EditorBlock',

	];
	}
