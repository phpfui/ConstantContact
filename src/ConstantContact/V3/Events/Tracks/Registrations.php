<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Events\Tracks;

class Registrations extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/events/{event_id}/tracks/{track_id}/registrations');
		}

	/**
	 * Get a list of registrations for an event.
	 *
	 * Use the `event_id` and `track_id` path parameters to get a list of registrations
	 * for an event. Use optional query parameters to limit the number of results
	 * returned per page, the sort order, or to filter results by specific
	 * criteria; such as registration `status`.
	 *
	 * @param string $event_id The ID that uniquely identifies the event.
	 * @param string $track_id The track ID that uniquely identifies the event track.
	 * @param string $registration_status Filter registration results by status.
	 * @param string $payment_status Filter registration results by payment status.
	 * @param string $search_text Filter registration results by first name, last name, or email address.
	 * @param string $sort_by Specify the field to use to sort the results.
	 * @param string $sort_order Use to specify how you want the results sorted.
	 * @param string $page_size Alternative to the <code>limit</code> parameter to limit the number of results returned per page. If specifying both the <code>limit</code> and <code>page_size</code> query parameters, they must be the same value.
	 * @param string $limit Limit the number of results returned per page. If specifying both the <code>limit</code> and <code>page_size</code> query parameters, they must be the same value.
	 * @param string $prev Cursor for pagination used to get the previous page of results (mutually exclusive with <code>next</code>).
	 * @param string $next Cursor for pagination used to get the next page of results (mutually exclusive with <code>prev</code>).
	 */
	public function get(string $event_id, string $track_id, ?string $registration_status = null, ?string $payment_status = null, ?string $search_text = null, ?string $sort_by = null, ?string $sort_order = null, ?string $page_size = null, ?string $limit = null, ?string $prev = null, ?string $next = null) : ?array
		{

		if (null !== $registration_status)
			{
			$validValues = ['PENDING', 'REGISTERED', 'CANCELED', 'EXPIRED', 'IN_PROGRESS, FAILED'];

			if (! \in_array($registration_status, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter registration_status with value '{$registration_status}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		if (null !== $payment_status)
			{
			$validValues = ['PENDING', 'PAID', 'REFUNDED', 'CANCELLED', 'FAILED', 'CHARGED_BACK'];

			if (! \in_array($payment_status, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter payment_status with value '{$payment_status}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		if (null !== $sort_by)
			{
			$validValues = ['first_name', 'last_name', 'email_address', 'registration_status', 'payment_status', 'tickets', 'total'];

			if (! \in_array($sort_by, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter sort_by with value '{$sort_by}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		if (null !== $sort_order)
			{
			$validValues = ['ASC', 'DESC'];

			if (! \in_array($sort_order, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter sort_order with value '{$sort_order}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		return $this->doGet(['event_id' => $event_id, 'track_id' => $track_id, 'registration_status' => $registration_status, 'payment_status' => $payment_status, 'search_text' => $search_text, 'sort_by' => $sort_by, 'sort_order' => $sort_order, 'page_size' => $page_size, 'limit' => $limit, 'prev' => $prev, 'next' => $next, ]);
		}

	public function getTyped(string $event_id, string $track_id, ?string $registration_status = null, ?string $payment_status = null, ?string $search_text = null, ?string $sort_by = null, ?string $sort_order = null, ?string $page_size = null, ?string $limit = null, ?string $prev = null, ?string $next = null) : ?\PHPFUI\ConstantContact\Definition\PaginatedRegistrations
		{
		$data = $this->get($event_id, $track_id, $registration_status, $payment_status, $search_text, $sort_by, $sort_order, $page_size, $limit, $prev, $next);

		return $data ? new \PHPFUI\ConstantContact\Definition\PaginatedRegistrations($data) : null;
		}

	}
