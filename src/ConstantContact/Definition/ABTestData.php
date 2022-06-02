<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $alternative_subject The alternate email subject line to use for A/B testing.
 * @property int $test_size The percentage of contact recipients to participate in the A/B Test. For example, if the value is 30, then 30% of contacts will receive the email campaign with subject line A, and 30% of contacts will receive the email campaign with subject line B. Valid values include <code>5</code> to <code>50</code> percent. Currently, A/B tests support subject line only.
 * @property int $winner_wait_duration The number of hours Constant Contact waits after the A/B test is sent before determining the winning subject line. The winner is the subject line with the highest number of contact opens. Valid values include <code>6</code>, <code>12</code>, <code>24</code>, and <code>48</code>. After the winner is determined, Constant Contact automatically sends the email campaign with the winning subject line to all the remaining contacts, which did not participate in the A/B test.
 */
class ABTestData extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'alternative_subject' => 'string',
		'test_size' => 'int',
		'winner_wait_duration' => 'int',

	];
	}
