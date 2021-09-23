<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $errors An array of errors indicating any partial failures in the query.
	 * @var array $results An array of results listing statistics for each requested <code>campaign_id</code>.
	 */

class CampaignStatsQueryResultEmail extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'errors' => 'array',
		'results' => 'array',

	];
	}