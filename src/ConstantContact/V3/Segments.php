<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3;

class Segments extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/segments');
		}


	/**
	 * GET all Segments
	 *
	 * Use this method to get a list of all segments associated with the account.
	 * You can sort segment results and limit the number of segments that display
	 * per page. Deleted segments are excluded from the results. For more use
	 * case information, see [Get All Segments](https://v3.developer.constantcontact.com/api_guide/segment_get_all.html)
	 * in the API guide.
	 *
	 * @param string $limit The number of segments to return on a page.
	 * @param string $sort_by Specify the segment sort order to use. Sort by name (`sort_by=name`) in ascending order, or sort by date (`sort_by=date`) in descending order with the most recently updated segments listed first.
	 */
	public function get(?string $limit = null, ?string $sort_by = null) : array
		{
		return $this->doGet(['limit' => $limit, 'sort_by' => $sort_by, ]);
		}

	/**
	 * POST (create) a Segment
	 *
	 * Use this method to create a new segment. You create segments to target
	 * a subset of your contacts that meet your specific criteria for a marketing
	 * campaign. The segment `name` must be unique. The `segment_criteria`
	 * requires single-string escaped JSON. Constant Contact uses the contact
	 * data that you specify in the `segment_criteria` to evaluate and identify
	 * the contacts you want to target. Contact data can be grouped from different
	 * data sources, including:
	 * 
	 * -  **`tracking`**: Supports **or** and **and** groups.
	 * 
	 * 
	 * -  **`contact`**: Supports **or** and **and** groups.
	 * 
	 * 
	 * -  **`list_membership`**: Supports **or** groups.
	 * 
	 * -  **`tags`**: Supports **or** groups.
	 * 
	 * If you do not specify `list_membership` as criteria, Constant Contact
	 * evaluates all contacts in your account. To avoid returning a 400 error
	 * response, when specifying the `segment_criteria` do not request more
	 * than 500 email campaigns or a date range greater than 1825 days (5 years)
	 * be evaluated.
	 * 
	 * For more use case information, see the [Segments Overview](https://v3.developer.constantcontact.com/api_guide/segments_overview.html)
	 * in the API guide.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\SegmentData $body The segment `name` and `segment_criteria` (requires single-string escaped JSON).
	 */
	public function post(\PHPFUI\ConstantContact\Definition\SegmentData $body) : array
		{
		return $this->doPost(['body' => $body, ]);
		}
	}