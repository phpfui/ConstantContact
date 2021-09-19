<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3;

class Segment extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/segments/{segment_id}');
		}


	/**
	 * GET a Segment's Details
	 *
	 * Use this method to get details about a segment, including the segment
	 * criteria. If you know the `segment_id` You can also use this method
	 * to get details about a deleted segment. For more use case information,
	 * see [Get a Segment's Details](/api_guide/segment_get.html) in the API
	 * guide.
	 *
	 * @param int $segment_id The system-generated unique ID that identifies a segment.
	 */
	public function get(int $segment_id) : array
		{
		return $this->doGet(['segment_id' => $segment_id, ]);
		}

	/**
	 * PUT (update) a Segment
	 *
	 * Use this method to update an existing segment's name (`name`) and/or
	 * contact selection criteria (`segment_criteria`). You must specify both
	 * the `name` and the `segment_criteria` in the request body, even if you
	 * don't plan to update both. The segment's name must be unique and the
	 * JSON must be valid (requires single-string escaped JSON). To avoid returning
	 * a 400 error response, when specifying the `segment_criteria` do not
	 * request more than 500 email campaigns or a date range greater than 1825
	 * days (5 years) be evaluated. For more use case information, see [Update
	 * Segment Details](/api_guide/segment_update.html) in the API guide.
	 *
	 * @param int $segment_id The system generated ID that uniquely identifies the segment that you want to modify.
	 * @param PHPFUI\ConstantContact\Definition\SegmentData $body Include both the `name` and `segment_criteria` (single-string escaped JSON) in the body request, then make updates to either or both.
	 */
	public function put(int $segment_id, PHPFUI\ConstantContact\Definition\SegmentData $body) : array
		{
		return $this->doPut(['segment_id' => $segment_id, 'body' => $body, ]);
		}

	/**
	 * DELETE a Segment
	 *
	 * Use this method to delete a segment from your account. Before deleting
	 * a segment, verify that the segment is not associated with a scheduled
	 * campaign.
	 * 
	 * Deleted segments do not display in the results when using the `GET /segments`
	 * endpoint. If you know the `segment_id`, you can use the `GET /segments/{segment_id}`
	 * endpoint to view the deleted segment's details. A segment's details
	 * are preserved for external reference purposes, such as displaying the
	 * segment name in a campaign's history. For more use case information,
	 * see [Delete a Segment](/api_guide/segment_delete.html) in the API guide.
	 *
	 *
	 * @param int $segment_id The system generated ID that uniquely identifies the segment.
	 */
	public function delete(int $segment_id) : bool
		{
		return $this->doDelete(['segment_id' => $segment_id, ]);
		}
	}