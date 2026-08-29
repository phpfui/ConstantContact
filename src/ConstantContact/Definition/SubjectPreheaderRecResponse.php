<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array $recommendations Recommended subject lines and/or preheaders.
 * @property int $token_count Number of tokens used to generate the recommendations.
 * @property string $message Optional status or informational message from the recommendation service.
 */
class SubjectPreheaderRecResponse extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'recommendations' => 'array',
		'token_count' => 'int',
		'message' => 'string',

	];

	protected static array $requiredFields = [
		'recommendations',

	];
	}
