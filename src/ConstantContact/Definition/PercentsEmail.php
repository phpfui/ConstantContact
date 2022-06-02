<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $bounce Percentage of emails sent to unique recipients that bounced.
 * @property int $click Percentage of recipients who opened the email who also clicked one or more links in it.
 * @property int $desktop_click Percentage of clicks that came from a standard desktop or laptop computer.
 * @property int $desktop_open Percentage of opens that came from a standard desktop or laptop computer.
 * @property int $did_not_open Percentage of recipients that received the email (did not bounce) but did not open it.
 * @property int $mobile_click Percentage of clicks that came from a mobile phone, tablet computer, or similar small mobile device (e.g. iPhone or iPad).
 * @property int $mobile_open Percentage of opens that came from a mobile phone, tablet computer, or similar small mobile device (e.g. iPhone or iPad).
 * @property int $open Percentage of recipients that received the email (did not bounce) and opened it.
 * @property int $unsubscribe Percentage of recipients that received the email (did not bounce) and chose to unsubscribe.
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
