<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Events\Tracks;

class Registration extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/events/{event_id}/tracks/{track_id}/registrations/{registration_id}');
		}

	/**
	 * Get registration details for an event.
	 *
	 * Use the `event_id`, `registration_id`, and `track_id` path parameters
	 * to get registration details.
	 *
	 * @param string $event_id The ID that uniquely identifies the event.
	 * @param string $track_id The track key that uniquely identifies the event track.
	 * @param string $registration_id The ID that uniquely identifies the registration.
	 */
	public function get(string $event_id, string $track_id, string $registration_id) : ?array
		{

		return $this->doGet(['event_id' => $event_id, 'track_id' => $track_id, 'registration_id' => $registration_id, ]);
		}

	public function getTyped(string $event_id, string $track_id, string $registration_id) : ?\PHPFUI\ConstantContact\Definition\DetailedRegistrationDto
		{
		$data = $this->get($event_id, $track_id, $registration_id);

		return $data ? new \PHPFUI\ConstantContact\Definition\DetailedRegistrationDto($data) : null;
		}

	}
