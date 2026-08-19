<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\Definition\Structure $structure The root block of the email document. The conventional nesting order is:
 * ```
 * body
 * └── shell
 * └── shellPanel  (one or more — header, content, footer)
 * └── layout  (controls column arrangement)
 * └── column  (1–5 per layout)
 * └── text | image | button | spacer | divider | socialFollow
 * ```
 * @property \PHPFUI\ConstantContact\Definition\Theme $theme Object containing styling information applied to the entire email. For example, the basic colors, fonts, and background image for the email.
 */
class EditorDocument extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'structure' => '\PHPFUI\ConstantContact\Definition\Structure',
		'theme' => '\PHPFUI\ConstantContact\Definition\Theme',

	];
	}
