<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Events;

class Copy extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/events/{event_id}/copy');
		}

	/**
	 * POST (copy) an existing event.
	 *
	 * Creates a deep copy of an existing event with all its settings, registration
	 * forms, and landing pages. The copied event is created in DRAFT status.
	 * Events in DRAFT, ACTIVE, COMPLETE, or CANCELED status can be copied.
	 * DELETED events cannot be copied.
	 *
	 * @param string $event_id The ID of the event to copy.
	 * @param \PHPFUI\ConstantContact\Definition\EventCopyRequestDto $body A JSON request body containing the copy options.
	 */
	public function post(string $event_id, \PHPFUI\ConstantContact\Definition\EventCopyRequestDto $body) : ?array
		{

		return $this->doPost(['event_id' => $event_id, 'body' => $body->getData(), ]);
		}

	public function postTyped(string $event_id, \PHPFUI\ConstantContact\Definition\EventCopyRequestDto $body) : ?\PHPFUI\ConstantContact\Definition\EventDto
		{
		$data = $this->post($event_id, $body);

		return $data ? new \PHPFUI\ConstantContact\Definition\EventDto($data) : null;
		}

	}
