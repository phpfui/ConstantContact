<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Events\CheckIn;

class Tickets extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/events/{event_id}/check_in/tickets');
		}

	/**
	 * Check in event tickets.
	 *
	 * Use this endpoint to mark one or more tickets as checked in. The event
	 * must be in `ACTIVE` or `COMPLETE` status. Tickets with `CANCELLED` status
	 * cannot be checked in (returns HTTP 400).
	 *
	 * @param string $event_id The ID that uniquely identifies the event.
	 * @param \PHPFUI\ConstantContact\Definition\OrderTicketKeysRequestDto $body Set of order ticket keys to mark as checked in.
	 */
	public function post(string $event_id, \PHPFUI\ConstantContact\Definition\OrderTicketKeysRequestDto $body) : ?array
		{

		return $this->doPost(['event_id' => $event_id, 'body' => $body->getData(), ]);
		}
	}
