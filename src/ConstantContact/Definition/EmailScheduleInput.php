<?php

namespace PHPFUI\ConstantContact\Definition;

class EmailScheduleInput extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var DateTime $scheduled_date The date when Constant Contact will send the email campaign activity to contacts in ISO-8601 format. For example, <code>2022-05-17</code> and <code>2022-05-17T16:37:59.091Z</code> are valid dates. Use <code>"0"</code> as the date to have Constant Contact immediately send the email campaign activity to contacts.
	 */

	protected static array $fields = [
		'scheduled_date' => 'DateTime',

	];
	}