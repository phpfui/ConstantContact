<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Events\UndoCheckIn;

class Tickets extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/events/{event_id}/undo_check_in/tickets');
		}

	/**
	 * Undo event ticket check-in.
	 *
	 * Use this endpoint to undo check-in for one or more tickets, marking
	 * them as not checked in. The event must be in `ACTIVE` or `COMPLETE`
	 * status.
	 *
	 * @param string $event_id The ID that uniquely identifies the event.
	 * @param \PHPFUI\ConstantContact\Definition\OrderTicketKeysRequestDto $body Set of order ticket keys to mark as not checked in.
	 */
	public function post(string $event_id, \PHPFUI\ConstantContact\Definition\OrderTicketKeysRequestDto $body) : ?array
		{

		return $this->doPost(['event_id' => $event_id, 'body' => $body->getData(), ]);
		}
	}
