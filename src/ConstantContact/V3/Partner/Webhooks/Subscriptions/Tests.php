<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Partner\Webhooks\Subscriptions;

class Tests extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/partner/webhooks/subscriptions/{topic_id}/tests');
		}


	/**
	 * POST Test Send Webhook Notification
	 *
	 * Use this POST method to validate a webhook subscription by triggering
	 * a test notification for your chosen webhook `topic_id`. Possible `topic_id`
	 * values include:
	 * 
	 * * `1` - Billing tier upgrade.
	 * * `2` - Billing tier downgrade.
	 * * `3` - Account cancelled.
	 * * `4` - Account disabled.
	 * 
	 * After you successfully send this request, Constant Contact will automatically
	 * send a POST notification to your chosen topic's callback URI with example
	 * data.
	 *
	 * @param string $topic_id Identifies a webhook topic.
	 */
	public function post(string $topic_id) : array
		{
		return $this->doPost(['topic_id' => $topic_id, ]);
		}
	}