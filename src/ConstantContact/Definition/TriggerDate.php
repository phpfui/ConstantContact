<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $date_field Contact field that contains the full date. Must include 'record.' prefix (e.g., record.anniversary).
 * @property string $day_field Contact field that contains the day-of-month value. Must include 'record.' prefix (e.g., record.birthday_day).
 * @property string $month_field Contact field that contains the month value. Must include 'record.' prefix (e.g., record.birthday_month).
 * @property string $type Where the date is represented (e.g., Profile).
 */
class TriggerDate extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'date_field' => 'string',
		'day_field' => 'string',
		'month_field' => 'string',
		'type' => 'string',

	];
	}
