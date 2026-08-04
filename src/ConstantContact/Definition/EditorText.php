<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $component Name of component (`text`).
 * @property string $cpeid Component id.
 * @property string $modifier Optional role descriptor for component.
 * @property string $align Text alignment.
 * @property string $valign Text vertical alignment.
 * @property string $content HTML content of the text block.
 * @property int $line_height Text line height.
 * @property string $font_family Text font family.
 * @property string $color Text color hex code.
 * @property int $font_size Text font size.
 * @property string $font_weight Text font weight.
 * @property string $font_style Text font style.
 * @property string $text_decoration Text decoration. Used to underline the text.
 * @property \PHPFUI\ConstantContact\Definition\EditorPaddingProperties $padding
 * @property \PHPFUI\ConstantContact\Definition\EditorBlock $block
 */
class EditorText extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'component' => 'string',
		'cpeid' => 'string',
		'modifier' => 'string',
		'align' => 'string',
		'valign' => 'string',
		'content' => 'string',
		'line_height' => 'int',
		'font_family' => 'string',
		'color' => 'string',
		'font_size' => 'int',
		'font_weight' => 'string',
		'font_style' => 'string',
		'text_decoration' => 'string',
		'padding' => '\PHPFUI\ConstantContact\Definition\EditorPaddingProperties',
		'block' => '\PHPFUI\ConstantContact\Definition\EditorBlock',

	];
	}
