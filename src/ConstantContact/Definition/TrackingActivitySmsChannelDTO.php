<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $country_code The ISO country code that is associated with SMS address.
 * @property string $state The SMS channel status:
 * <ul><li><code>N</code>: not_set<li>
  * <li><code>T</code>: temp_hold<li>
  * <li><code>P</code>: pending_confirmation<li>
  * <li><code>I</code>: implicit<li>
  * <li><code>E</code>: explicit<li>
  * <li><code>O</code>: unsubscribed<li>
  * <li><code>D</code>:deprecated<li></ul>
 * @property string $formatted_international The formatted SMS number returned if the SMS <code>country_code</code> does not match the contacts <code>country_code</code>.
 * @property string $formatted_national The formatted SMS number returned if the SMS <code>country_code</code> matches the contacts <code>country_code</code>.
 */
class TrackingActivitySmsChannelDTO extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'country_code' => 'string',
		'state' => ['N', 'T', 'P', 'I', 'E', 'O', 'D'],
		'formatted_international' => 'string',
		'formatted_national' => 'string',

	];
	}
