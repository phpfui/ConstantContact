<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\Definition\SendTimeItem> $recommended_times List of 3 recommended send times
 * @property string $locale Locale/timezone identifier
 * @property string $data_source Data source, either account, industry, or platform
 * @property bool $cached Indicates if the server served the response from cache.
 */
class SuggestedSendTimes extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'recommended_times' => 'array<\PHPFUI\ConstantContact\Definition\SendTimeItem>',
		'locale' => 'string',
		'data_source' => 'string',
		'cached' => 'bool',

	];
	}
