<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3;

class ContactTag extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contact_tags/{tag_id}');
		}


	/**
	 * GET Tag Details
	 *
	 * Use this method to get tag details for a specified `tag_id`. Use the
	 * `include_count` query parameter to include or exclude the total number
	 * of contacts to which this tag is assigned. To learn more, see  [Get
	 * a Tag's Details](/api_guide/tags_get_single.html).
	 *
	 * @param string $tag_id The ID that uniquely identifies a tag (UUID format).
	 * @param bool $include_count Use to include (`true`) or exclude (`false`) the total number of tagged contacts (`contacts_count`) from the results.
	 */
	public function get(string $tag_id, ?bool $include_count = null) : array
		{
		return $this->doGet(['tag_id' => $tag_id, 'include_count' => $include_count, ]);
		}

	/**
	 * PUT (Update) a Tag
	 *
	 * Use this method to rename an existing tag to a new unique tag name (`name`).
	 * The maximum length is 255 characters. The `tag_source` value cannot
	 * be updated using this method. You can set the `tag_source` value using
	 * the `POST contact_tags method`. [Learn more](/api_guide/tags_update.html)
	 *
	 *
	 * @param string $tag_id The system generated ID used to uniquely identify the tag that you want to rename (UUID format).
	 * @param PHPFUI\ConstantContact\Definition\TagPut $body The JSON payload used to update the tag name (`name`).
	 */
	public function put(string $tag_id, PHPFUI\ConstantContact\Definition\TagPut $body) : array
		{
		return $this->doPut(['tag_id' => $tag_id, 'body' => $body, ]);
		}

	/**
	 * DELETE a Tag
	 *
	 * Use this method to create an activity used to un-assign a tag from all
	 * assigned contacts and delete the tag. This is an asynchronous activity.
	 * To view activity details for the delete request, use the href link returned
	 * in the response. [Learn more](/api_guide/tags_delete.html).
	 *
	 * @param string $tag_id The ID that uniquely identifies a tag in UUID format.
	 */
	public function delete(string $tag_id) : bool
		{
		return $this->doDelete(['tag_id' => $tag_id, ]);
		}
	}