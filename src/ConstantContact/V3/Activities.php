<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3;

class Activities extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities');
		}

	/**
	 * GET Activity Status Collection
	 *
	 * This endpoint returns a collection of activities. Use the state query
	 * parameter to include only activities with a specific status (processing,
	 * completed, cancelled, failed, or time_out). Use the limit query parameter
	 * to define the number of activities returned per page. Learn [more](https://v3.developer.constantcontact.com/api_guide/activity_status.html).
	 *
	 *
	 * @param int $limit Specifies the number of results displayed per page of output, from 1 - 500, default = 50.
	 * @param string $state Use this parameter to filter the response to include only activities in one of the following states: cancelled, completed, failed, processing, or timed_out.
	 */
	public function get(?int $limit = null, ?string $state = null) : array
		{

		if (null !== $state)
			{
			$validValues = ['processing', 'completed', 'cancelled', 'failed', 'timed_out'];

			if (! \in_array($state, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter state with value '{$state}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		return $this->doGet(['limit' => $limit, 'state' => $state, ]);
		}
	}
