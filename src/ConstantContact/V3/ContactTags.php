<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3;

class ContactTags extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contact_tags');
		}


	/**
	 * GET Details for All Tags
	 *
	 * Use this endpoint to get details for all tags in your account. Use the
	 * <code>include_count</code> query parameter to include the total number
	 * of contacts assigned each tag. Use the <code>limit</code> query parameter
	 * to limit the number of tag results returned per page. To get the next
	 * page of results, copy the <code>cursor={the cursor ID}</code> from the
	 * resulting href link and add it (<code>&</code>) to the URL. For example:
	 *
	 * 
	 * <p><code>/v3/contact_tags?limit=1&cursor=</code></p><p><code>bGltaXQ9MSZuZXh0PTJjZDgwMjdhLTc4YzAtMTFlOS1iZmQwLWZhMTYzZTZiMDFjMQ=</code></p>
	 *
	 * To learn more, see [Get Tags](https://v3.developer.constantcontact.com/api_guide/tags_get.html).
	 *
	 *
	 * @param int $limit Use to specify the number of tag results (up to `500`) to display per page of output. The default is `50`.
	 * @param bool $include_count Returns the total number of contacts (`contacts_count`) to which a tag applies.
	 */
	public function get(?int $limit = null, ?bool $include_count = null) : array
		{
		return $this->doGet(['limit' => $limit, 'include_count' => $include_count, ]);
		}

	/**
	 * POST (Create) a Tag
	 *
	 * Use this method to create a new tag. The tag `name` is required and
	 * must be unique and can include most common keyboard symbols. Optionally,
	 * when creating a new tag you can specify the source (`tag_source`) used
	 * to identify the contacts to tag in the request body. [Learn more](https://v3.developer.constantcontact.com/api_guide/tags_create.html).
	 *
	 *
	 * @param \PHPFUI\ConstantContact\Definition\TagPost $body The JSON payload to use to create a new tag.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\TagPost $body) : array
		{
		return $this->doPost(['body' => $body->getData(), ]);
		}
	}