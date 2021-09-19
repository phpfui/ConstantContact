<?php

namespace PHPFUI\ConstantContact\Definition;

class WebhooksSubscriptionBody extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $hook_uri The callback URI you would like to use to receive webhook notifications. Constant Contact will automatically send POST notifications about your chosen topic to this URI.
	 */

	protected static array $fields = [
		'hook_uri' => 'string',

	];
	}