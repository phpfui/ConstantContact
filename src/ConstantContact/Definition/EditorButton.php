<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $component Name of component (`button`).
 * @property string $cpeid Component id.
 * @property string $modifier Optional role descriptor for component.
 * @property string $content Button label text.
 * @property \PHPFUI\ConstantContact\Definition\EditorLink $link
 * @property string $color Text color.
 * @property int $font_size Button font size.
 * @property string $font_family Button font family.
 * @property string $font_weight Button font weight.
 * @property string $font_style Button font style.
 * @property string $text_decoration Button text decoration. Used to underline the button text.
 * @property string $background Button background color.
 * @property int $corner_radius Button corner radius. Controls how rounded the buttons appears.
 * @property string $align Button alignment. Can be left, center, or right.
 * @property \PHPFUI\ConstantContact\Definition\Width $width
 * @property \PHPFUI\ConstantContact\Definition\EditorBorderProperties $border
 * @property \PHPFUI\ConstantContact\Definition\InnerPadding $inner_padding
 * @property \PHPFUI\ConstantContact\Definition\EditorPaddingProperties $padding
 * @property \PHPFUI\ConstantContact\Definition\EditorBlock $block
 */
class EditorButton extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'component' => 'string',
		'cpeid' => 'string',
		'modifier' => 'string',
		'content' => 'string',
		'link' => '\PHPFUI\ConstantContact\Definition\EditorLink',
		'color' => 'string',
		'font_size' => 'int',
		'font_family' => 'string',
		'font_weight' => 'string',
		'font_style' => 'string',
		'text_decoration' => 'string',
		'background' => 'string',
		'corner_radius' => 'int',
		'align' => 'string',
		'width' => '\PHPFUI\ConstantContact\Definition\Width',
		'border' => '\PHPFUI\ConstantContact\Definition\EditorBorderProperties',
		'inner_padding' => '\PHPFUI\ConstantContact\Definition\InnerPadding',
		'padding' => '\PHPFUI\ConstantContact\Definition\EditorPaddingProperties',
		'block' => '\PHPFUI\ConstantContact\Definition\EditorBlock',

	];
	}
