<?php

namespace PHPFUI\ConstantContact\Definition;

class PagedEmailCampaignResponse extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 */

	protected static array $fields = [
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\PagingLinks2',
		'campaigns' => 'array',

	];
	}