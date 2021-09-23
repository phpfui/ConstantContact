<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $errors Array of errors indicating any partial failures in the query
	 * @var array $results An array of results containing statistics for each requested campaign activity
	 */

class CampaignActivityStatsQueryResultEmail extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'errors' => 'array',
		'results' => 'array',

	];
	}