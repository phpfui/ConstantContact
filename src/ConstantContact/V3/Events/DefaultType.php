<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Events;

class DefaultType extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/events/default');
		}

	/**
	 * POST (create) a new event.
	 *
	 * Creates a new event with default settings, registration form, and landing
	 * page. The event will be created in DRAFT status.
	 *
	 * @param string $name Name for the new event. If not provided, a default name will be generated.
	 * @param string $start_time Event start time in ISO 8601 format. If not provided, defaults to a future date.
	 * @param string $end_time Event end time in ISO 8601 format. If not provided, defaults to one hour after start time.
	 * @param string $placeholder_campaign_id Placeholder campaign ID for the event.
	 */
	public function post(?string $name = null, ?string $start_time = null, ?string $end_time = null, ?string $placeholder_campaign_id = null) : ?array
		{

		return $this->doPost(['name' => $name, 'start_time' => $start_time, 'end_time' => $end_time, 'placeholder_campaign_id' => $placeholder_campaign_id, ]);
		}

	public function postTyped(?string $name = null, ?string $start_time = null, ?string $end_time = null, ?string $placeholder_campaign_id = null) : ?\PHPFUI\ConstantContact\Definition\EventDto
		{
		$data = $this->post($name, $start_time, $end_time, $placeholder_campaign_id);

		return $data ? new \PHPFUI\ConstantContact\Definition\EventDto($data) : null;
		}

	}
