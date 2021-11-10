<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var int $em_bounces Number of unique email bounces.
	 * @var int $em_clicks Number of unique recipients who clicked any link in the email.
	 * @var int $em_clicks_all Total number of non-unique email clicks.
	 * @var int $em_clicks_all_computer Number of non-unique email clicks on a standard desktop or laptop computer.
	 * @var int $em_clicks_all_mobile Number of non-unique email clicks on a mobile phone or similar small mobile device (e.g. iPhone).
	 * @var int $em_clicks_all_tablet Number of non-unique email clicks on a small tablet type computer (e.g. iPad).
	 * @var int $em_clicks_all_other Number of non-unique email clicks on an unknown device (e.g. Game Console or Wearable).
	 * @var int $em_clicks_all_none Number of non-unique email clicks for which the device type was not captured. This will account for any clicks prior to when device type was collected and stored.
	 * @var int $em_forwards Number of unique recipients who forwarded the email using the forward to a friend feature (not available for all types of emails).
	 * @var int $em_not_opened Number of unique recipients who did not open the email. This is calculated as follows: <code>em_not_opened</code> is equal to <code>em_sends - em_opens - em_bounces</code>. This value is reported as zero if the calculation results in a negative value.
	 * @var int $em_opens Number of unique recipients who opened the email.
	 * @var int $em_opens_all Total number of non-unique email opens.
	 * @var int $em_opens_all_computer Number of non-unique email opens on a standard desktop or laptop computer.
	 * @var int $em_opens_all_mobile Number of non-unique email opens on a mobile phone or similar small mobile device (e.g. iPhone).
	 * @var int $em_opens_all_tablet Number of non-unique email opens on a small tablet type computer (e.g. iPad).
	 * @var int $em_opens_all_other Number of non-unique email opens on an unknown device (e.g. Game Console or Wearable).
	 * @var int $em_opens_all_none Number of non-unique email opens for which the device type was not captured. This will account for any opens prior to when device type was collected and stored.
	 * @var int $em_optouts Number of unique recipients who unsubscribed due to this email.
	 * @var int $em_sends Number of unique email sends.
	 */

class StatsEmail extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'em_bounces' => 'int',
		'em_clicks' => 'int',
		'em_clicks_all' => 'int',
		'em_clicks_all_computer' => 'int',
		'em_clicks_all_mobile' => 'int',
		'em_clicks_all_tablet' => 'int',
		'em_clicks_all_other' => 'int',
		'em_clicks_all_none' => 'int',
		'em_forwards' => 'int',
		'em_not_opened' => 'int',
		'em_opens' => 'int',
		'em_opens_all' => 'int',
		'em_opens_all_computer' => 'int',
		'em_opens_all_mobile' => 'int',
		'em_opens_all_tablet' => 'int',
		'em_opens_all_other' => 'int',
		'em_opens_all_none' => 'int',
		'em_optouts' => 'int',
		'em_sends' => 'int',

	];
	}