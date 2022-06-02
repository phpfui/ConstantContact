<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\Definition\PagingLinks $_links
 * @property array<\PHPFUI\ConstantContact\Definition\EmailCampaigns> $campaigns
 */
class PagedEmailCampaignResponse extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'_links' => '\PHPFUI\ConstantContact\Definition\PagingLinks',
		'campaigns' => 'array<\PHPFUI\ConstantContact\Definition\EmailCampaigns>',

	];
	}
