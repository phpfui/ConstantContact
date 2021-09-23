<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var array $site_owner_list Lists all Constant Contact client accounts that are managed under a partner account.
	 * @var PHPFUI\ConstantContact\Definition\PaginationLinks $_links HAL property that contains the next link, if applicable.
	 */

class PartnerAccount extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'site_owner_list' => 'array',
		'_links' => 'PHPFUI\\ConstantContact\\Definition\\PaginationLinks',

	];
	}