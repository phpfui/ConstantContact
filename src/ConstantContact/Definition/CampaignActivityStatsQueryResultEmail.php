<?php

namespace PHPFUI\ConstantContact\Definition;

class CampaignActivityStatsQueryResultEmail extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var array $errors Array of errors indicating any partial failures in the query
	 * @var array $results An array of results containing statistics for each requested campaign activity
	 */

	protected static array $fields = [
		'errors' => 'array',
		'results' => 'array',

	];
	}