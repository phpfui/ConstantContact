<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Activities;

class ListDelete extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/activities/list_delete');
		}

	/**
	 * Delete Contact Lists
	 *
	 * Use this endpoint to delete up to 100 contact lists in an account.
	 *
	 * @param \PHPFUI\ConstantContact\Definition\ListIdList100 $body An array of `list_id`'s to delete.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\ListIdList100 $body) : ?array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}

	public function postTyped(\PHPFUI\ConstantContact\Definition\ListIdList100 $body) : ?\PHPFUI\ConstantContact\Definition\ActivityDeleteListsResponse
		{
		$data = $this->post($body);

		return $data ? new \PHPFUI\ConstantContact\Definition\ActivityDeleteListsResponse($data) : null;
		}

	}
