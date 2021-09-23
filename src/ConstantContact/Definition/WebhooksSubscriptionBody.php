<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $hook_uri The callback URI you would like to use to receive webhook notifications. Constant Contact will automatically send POST notifications about your chosen topic to this URI.
	 */

class WebhooksSubscriptionBody extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'hook_uri' => 'string',

	];
	}