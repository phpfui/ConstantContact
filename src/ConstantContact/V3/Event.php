<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3;

class Event extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/events/{event_id}');
		}

	/**
	 * GET details for a single event.
	 *
	 * Specify the `event_id` path parameter to retrieve the event's details.
	 *
	 *
	 * @param string $event_id The ID that uniquely identifies the event.
	 * @param bool $include Use to include (`true`) or exclude (`false`) event setting properties in the results.
	 */
	public function get(string $event_id, ?bool $include = null) : ?array
		{

		return $this->doGet(['event_id' => $event_id, 'include' => $include, ]);
		}

	public function getTyped(string $event_id, ?bool $include = null) : ?\PHPFUI\ConstantContact\Definition\EventDto
		{
		$data = $this->get($event_id, $include);

		return $data ? new \PHPFUI\ConstantContact\Definition\EventDto($data) : null;
		}

	}
