<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Events\Tracks\Registrations;

class PaymentStatus extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/events/{event_id}/tracks/{track_id}/registrations/payment_status');
		}

	/**
	 * Update payment status for event registrations.
	 *
	 * Use this endpoint to update the payment status for one or more registrations.
	 * This endpoint only processes registrations with a payment method (PAYPAL,
	 * WEPAY, STRIPE, DOOR, or CHECK). Free registrations without a payment
	 * method are silently excluded.
	 *
	 * @param string $event_id The ID that uniquely identifies the event.
	 * @param string $track_id The track key that uniquely identifies the event track.
	 * @param \PHPFUI\ConstantContact\Definition\PaymentStatusUpdateRequestDto $body Payment status update request data.
	 */
	public function put(string $event_id, string $track_id, \PHPFUI\ConstantContact\Definition\PaymentStatusUpdateRequestDto $body) : ?array
		{

		return $this->doPut(['event_id' => $event_id, 'track_id' => $track_id, 'body' => $body->getData(), ]);
		}

	public function putTyped(string $event_id, string $track_id, \PHPFUI\ConstantContact\Definition\PaymentStatusUpdateRequestDto $body) : ?\PHPFUI\ConstantContact\Definition\RegistrationStatusUpdateResponseDto
		{
		$data = $this->put($event_id, $track_id, $body);

		return $data ? new \PHPFUI\ConstantContact\Definition\RegistrationStatusUpdateResponseDto($data) : null;
		}

	}
