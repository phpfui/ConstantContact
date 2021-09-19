<?php

namespace PHPFUI\ConstantContact\Definition;

class CampaignStatsQueryResultEmail extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var array $errors An array of errors indicating any partial failures in the query.
	 * @var array $results An array of results listing statistics for each requested <code>campaign_id</code>.
	 */

	protected static array $fields = [
		'errors' => 'array',
		'results' => 'array',

	];
	}