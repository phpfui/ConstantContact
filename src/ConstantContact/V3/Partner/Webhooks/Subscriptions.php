<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Partner\Webhooks;

class Subscriptions extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/partner/webhooks/subscriptions');
		}

	/**
	 * GET a Collection of Webhook Topic Subscriptions
	 *
	 * Use this GET method to return a collection containing your application's
	 * webhook subscriptions.
	 *
	 */
	public function get() : array
		{

		return $this->doGet([]);
		}

	public function getReturnSchema() : \PHPFUI\ConstantContact\Definition\WebhooksSubscriptionCollection
		{
		return new \PHPFUI\ConstantContact\Definition\WebhooksSubscriptionCollection($this->get());
		}

	}
