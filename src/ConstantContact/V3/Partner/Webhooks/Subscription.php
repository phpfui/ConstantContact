<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Partner\Webhooks;

class Subscription extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/partner/webhooks/subscriptions/{topic_id}');
		}


	/**
	 * GET Webhook Topic Subscription
	 *
	 * Use this GET method to return subscription information for a certain
	 * `topic_id`. Possible `topic_id` values include:
	 * 
	 * * `1` - Billing tier upgrade.
	 * * `2` - Billing tier downgrade.
	 * * `3` - Account cancelled.
	 * * `4` - Account disabled.
	 *
	 * @param string $topic_id Identifies a webhook topic.
	 */
	public function get(string $topic_id) : array
		{
		return $this->doGet(['topic_id' => $topic_id, ]);
		}

	/**
	 * PUT Webhook Topic Subscription
	 *
	 * Use this PUT method to subscribe your application to a `topic_id` or
	 * to update the callback URI for an existing subscription. Possible `topic_id`
	 * values include:
	 * 
	 * * `1` - Billing tier upgrade.
	 * * `2` - Billing tier downgrade.
	 * * `3` - Account cancelled.
	 * * `4` - Account disabled.
	 * 
	 * After you subscribe your application, Constant Contact will automatically
	 * start sending POST notifications for your chosen topic to your application's
	 * callback URI. This is an example of the POST notification request body:
	 *
	 * 
	 * ```
	 * {"url":"https://api.cc.email/v3/partner/accounts/a07e1my9tbw0/plan",
	 *
	 * "api_key":"90ed8738-5190-44a3-bc12-c172930db12c",
	 * "event_type":"tier.increase"}
	 * ```
	 * </br>
	 * If your application does not return a success response after receiving
	 * a notification, Constant Contact will retry sending the POST notification
	 * at 1 minute intervals for up to an hour.
	 *
	 * @param string $topic_id Identifies a webhook topic.
	 * @param \PHPFUI\ConstantContact\Definition\WebhooksSubscriptionBody $body A JSON payload containing a callback URI. Constant Contact uses this callback URI to notify you about your chosen topic.
	 */
	public function put(string $topic_id, \PHPFUI\ConstantContact\Definition\WebhooksSubscriptionBody $body) : array
		{
		return $this->doPut(['topic_id' => $topic_id, 'body' => $body, ]);
		}

	/**
	 * DELETE Webhook Topic Subscriptions
	 *
	 * Use this DELETE method to unsubscribe your application from notifications
	 * on a certain `topic_id`. Possible `topic_id` values include:
	 * 
	 * * `1` - Billing tier upgrade.
	 * * `2` - Billing tier downgrade.
	 * * `3` - Account cancelled.
	 * * `4` - Account disabled.
	 *
	 * @param string $topic_id Identifies a webhook topic.
	 */
	public function delete(string $topic_id) : bool
		{
		return $this->doDelete(['topic_id' => $topic_id, ]);
		}
	}