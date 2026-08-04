<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $component Name of component (`divider`).
 * @property string $cpeid Component id.
 * @property string $modifier Optional role descriptor for component.
 * @property \PHPFUI\ConstantContact\Definition\Height $height
 * @property int $width Width as percentage.
 * @property string $color Color hex code.
 * @property \PHPFUI\ConstantContact\Definition\Format $format
 * @property \PHPFUI\ConstantContact\Definition\EditorPaddingProperties $padding
 * @property string $align
 * @property \PHPFUI\ConstantContact\Definition\EditorBlock $block
 */
class EditorDivider extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'component' => 'string',
		'cpeid' => 'string',
		'modifier' => 'string',
		'height' => '\PHPFUI\ConstantContact\Definition\Height',
		'width' => 'int',
		'color' => 'string',
		'format' => '\PHPFUI\ConstantContact\Definition\Format',
		'padding' => '\PHPFUI\ConstantContact\Definition\EditorPaddingProperties',
		'align' => 'string',
		'block' => '\PHPFUI\ConstantContact\Definition\EditorBlock',

	];
	}
