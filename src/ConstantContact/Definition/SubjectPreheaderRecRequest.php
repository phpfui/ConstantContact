<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $text Source email content used to generate subject line and/or preheader recommendations.
 * @property \PHPFUI\ConstantContact\Definition\SubjectPreheaderRecOption $option
 */
class SubjectPreheaderRecRequest extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'text' => 'string',
		'option' => '\PHPFUI\ConstantContact\Definition\SubjectPreheaderRecOption',

	];

	protected static array $minLength = [
		'text' => 1,

	];

	protected static array $requiredFields = [
		'text',

	];
	}
