<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Social\Hashtags;

class Groups extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/social/hashtags/groups');
		}

	/**
	 * GET hashtag groups
	 *
	 * Retrieves a paginated list of saved hashtag groups for the account.
	 * Hashtag groups allow users to save and organize reusable collections
	 * of hashtags that can be applied to social posts.
	 *
	 * Use the `limit` and `page` query parameters to paginate through results.
	 * Navigate to the next page using the `_links.next` link in the response.
	 *
	 *
	 *
	 * @param int $limit Maximum number of hashtag groups to retrieve per page. Default and maximum is `5`.
	 * @param int $page Page number to retrieve (0-based).
	 */
	public function get(?int $limit = null, ?int $page = null) : ?array
		{

		return $this->doGet(['limit' => $limit, 'page' => $page, ]);
		}

	public function getTyped(?int $limit = null, ?int $page = null) : ?\PHPFUI\ConstantContact\Definition\PagedHashtagGroupsDto
		{
		$data = $this->get($limit, $page);

		return $data ? new \PHPFUI\ConstantContact\Definition\PagedHashtagGroupsDto($data) : null;
		}
	}
