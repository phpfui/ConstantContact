<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $component Name of component (`socialFollow`).
 * @property string $cpeid Component id.
 * @property string $modifier Optional role descriptor for component.
 * @property array $icon
 * @property \PHPFUI\ConstantContact\Definition\IconStyle $icon_style
 * @property string $align Alignment of social link component.
 * @property int $width
 * @property \PHPFUI\ConstantContact\Definition\EditorPaddingProperties $padding
 * @property \PHPFUI\ConstantContact\Definition\EditorBlock $block
 */
class EditorSocialFollow extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'component' => 'string',
		'cpeid' => 'string',
		'modifier' => 'string',
		'icon' => 'array',
		'icon_style' => '\PHPFUI\ConstantContact\Definition\IconStyle',
		'align' => 'string',
		'width' => 'int',
		'padding' => '\PHPFUI\ConstantContact\Definition\EditorPaddingProperties',
		'block' => '\PHPFUI\ConstantContact\Definition\EditorBlock',

	];
	}
