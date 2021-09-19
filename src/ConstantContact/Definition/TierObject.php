<?php

namespace PHPFUI\ConstantContact\Definition;

class TierObject extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var string $usage_type Identifies the tier usage type that is associated with the billing plan.
	 * @var float $current_usage The number of active contacts (default) used within the current tier.
	 * @var int $tier The billing tier level that is associated with a client account. By default, the system determines the tier level to use based on the number of active contacts currently in the client account at the time of billing. Billing tiers may differ. The following shows an example billing tier: <ul>
  <li>level <code>1</code> = 0 - 500 contacts</li>
  <li>level <code>2</code> = 501 - 1000 contacts</li>
  <li>level <code>3</code> = 1001 - ...</li>
</ul>
	 * @var float $tier_min The minimum number of active contacts for the tier level.
	 * @var float $tier_max The maximum number of active contacts for the tier level.
	 * @var float $price The billing price set for the tier used to bill the client account each month.
	 * @var string $currency_code The currency (ISO currency code) used to price the tier for a client account.
	 */

	protected static array $fields = [
		'usage_type' => 'string',
		'current_usage' => 'float',
		'tier' => 'int',
		'tier_min' => 'float',
		'tier_max' => 'float',
		'price' => 'float',
		'currency_code' => 'string',

	];
	}