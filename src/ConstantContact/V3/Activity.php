<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3;

class Activity extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities/{activity_id}');
		}


	/**
	 * GET an Activity Status
	 *
	 * This endpoint returns an activity status report.
	 *
	 * @param string $activity_id The unique ID of the activity to GET
	 */
	public function get(string $activity_id) : array
		{
		return $this->doGet(['activity_id' => $activity_id, ]);
		}
	}