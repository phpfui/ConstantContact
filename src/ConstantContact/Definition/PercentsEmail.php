<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var int $bounce Percentage of emails sent to unique recipients that bounced.
	 * @var int $click Percentage of recipients who opened the email who also clicked one or more links in it.
	 * @var int $desktop_click Percentage of clicks that came from a standard desktop or laptop computer.
	 * @var int $desktop_open Percentage of opens that came from a standard desktop or laptop computer.
	 * @var int $did_not_open Percentage of recipients that received the email (did not bounce) but did not open it.
	 * @var int $mobile_click Percentage of clicks that came from a mobile phone, tablet computer, or similar small mobile device (e.g. iPhone or iPad).
	 * @var int $mobile_open Percentage of opens that came from a mobile phone, tablet computer, or similar small mobile device (e.g. iPhone or iPad).
	 * @var int $open Percentage of recipients that received the email (did not bounce) and opened it.
	 * @var int $unsubscribe Percentage of recipients that received the email (did not bounce) and chose to unsubscribe.
	 */

class PercentsEmail extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'bounce' => 'int',
		'click' => 'int',
		'desktop_click' => 'int',
		'desktop_open' => 'int',
		'did_not_open' => 'int',
		'mobile_click' => 'int',
		'mobile_open' => 'int',
		'open' => 'int',
		'unsubscribe' => 'int',

	];
	}