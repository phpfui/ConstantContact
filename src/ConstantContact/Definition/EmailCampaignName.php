<?php

namespace PHPFUI\ConstantContact\Definition;

class EmailCampaignName extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $name The updated email campaign name. The email campaign name must be unique.
	 */

	protected static array $fields = [
		'name' => 'string',

	];

	protected static array $maxLength = [
		'name' => 80,

	];
	}