<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3;

class Events extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/events');
		}

	/**
	 * GET a collection of events.
	 *
	 * Retrieve a collection of events with event details.
	 *
	 * @param string $event_status Use to return only events that meet the specified status. Acceptable values include `ACTIVE`,`DRAFT`, `COMPLETE`, `DELETED`,`CANCELLED`, and `ERROR`.
	 * @param string $search_text Use to return only events that include the specified text.
	 * @param string $sort_by Use to sort resulting events by one of the following properties: `name`, `start_time`, `end_time`, `created_time`, or `updated_time`.
	 * @param string $sort_order Sort order for the `sort_by parameter`. Accepted values include `ASC` (ascending) or `DESC` (descending). Defaults to `ASC` if `sort_by` is provided.
	 * @param string $limit Limit the number of results to return per page. Default and maximum is `100`.
	 * @param string $prev Cursor for retrieving the previous page of results. This value is obtained from the `prev_cursor` field in a previous response.
	 * @param string $next Cursor for retrieving the next page of results. This value is obtained from the `next_cursor` field in a previous response.
	 */
	public function get(?string $event_status = null, ?string $search_text = null, ?string $sort_by = null, ?string $sort_order = null, ?string $limit = null, ?string $prev = null, ?string $next = null) : ?array
		{

		return $this->doGet(['event_status' => $event_status, 'search_text' => $search_text, 'sort_by' => $sort_by, 'sort_order' => $sort_order, 'limit' => $limit, 'prev' => $prev, 'next' => $next, ]);
		}

	public function getTyped(?string $event_status = null, ?string $search_text = null, ?string $sort_by = null, ?string $sort_order = null, ?string $limit = null, ?string $prev = null, ?string $next = null) : ?\PHPFUI\ConstantContact\Definition\PaginationDtoEventListingDto
		{
		$data = $this->get($event_status, $search_text, $sort_by, $sort_order, $limit, $prev, $next);

		return $data ? new \PHPFUI\ConstantContact\Definition\PaginationDtoEventListingDto($data) : null;
		}

	}
