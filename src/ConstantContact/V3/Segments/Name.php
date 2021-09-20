<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Segments;

class Name extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/segments/{segment_id}/name');
		}


	/**
	 * PATCH (rename) a Segment
	 *
	 * Use this method to update an existing segment `name` with a new unique
	 * name in the request body. For more use case information, see [Rename
	 * a Segment](https://v3.developer.constantcontact.com/api_guide/segment_rename.html)
	 * in the API guide.
	 *
	 * @param int $segment_id The system generated ID that uniquely identifies the segment that you want to modify.
	 * @param \PHPFUI\ConstantContact\Definition\SegmentName $body Include the existing segment `name` in the body request, then rename the segment using a unique new name.
	 */
	public function patch(int $segment_id, \PHPFUI\ConstantContact\Definition\SegmentName $body) : array
		{
		return $this->doPatch(['segment_id' => $segment_id, 'body' => $body, ]);
		}
	}