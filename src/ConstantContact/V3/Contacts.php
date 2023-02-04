<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3;

class Contacts extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contacts');
		}

	/**
	 * GET Contacts Collection
	 *
	 * Use this method to return a collection of contacts. Use the query parameters
	 * to search for contacts that match specific contact properties and subresourse
	 * properties as criteria. For example, you can search using the contact's
	 * `email` address, `lists` memberships, and by the date range that a contact
	 * was created or updated. Use the `limit` query parameter to limit the
	 * number of results returned per page. Use the `include` query parameter
	 * to include contact sub-resources in the response and `include_count`
	 * to include the total number of contacts that meet your specified search
	 * criteria.
	 *
	 * By default, this method returns all contacts that are not deleted. Use
	 * the `status` query parameter with the value `all` to return all contacts
	 * including deleted contacts.
	 *
	 * @param string $status Use the `status` query parameter to search for contacts by status. This parameter accepts one or more comma separated values: `all`, `active`, `deleted`, `not_set`, `pending_confirmation`, `temp_hold`, and `unsubscribed`.
	 * @param string $email Use the `email` query parameter to search for a contact using a specific email address.
	 * @param string $lists Use the `lists` query parameter to search for contacts that are members of one or more specified lists. Use a comma to separate multiple `list_id` values, up to a maximum of 25.
	 * @param string $segment_id Use to get contacts that meet the segment criteria for a single specified `segment_id`. This query parameter can only be combined with the limit query parameter. When using the `segment_id` query parameter, the V3 API may return a 202 response code instead of a 200 response. The 202 response code indicates that your request has been accepted, but not fully completed. Retry sending your API request to return the completed results and a 200 response code.
	 * @param string $tags Use to get contact details for up to 50 specified tags. Use a comma to separate each `tag_id`.
	 * @param string $updated_after Use `updated_after` to search for contacts that have been updated after the date you specify. To search for updated contacts within a date range, specify both `updated_after` and `updated_before` dates. Accepts ISO-8601 formatted dates.
	 * @param string $updated_before Use `updated_before` to search for contacts that have been updated before a specified date. To search for updated contacts within a date range, specify both `updated_after` and `updated_before` dates. Accepts ISO-8601 formatted dates.
	 * @param string $created_after Use `created_after` to search for contacts created after a specified date. To search for contacts created within a date range, specify both `created_after` and `created_before` dates. Accepts ISO-8601 formatted dates.
	 * @param string $created_before Use `created_before` to search for contacts created before a specified date. To search for contacts created within a date range, specify both `created_after` and `created_before` dates. Accepts ISO-8601 formatted dates.
	 * @param string $optout_after Use `optout_after` to search for contacts that unsubscribed after a specified date.
	 * @param string $optout_before Use `optout_before` to search for contacts that unsubscribed before a specified date.
	 * @param string $include Use `include` to specify which contact sub-resources to include in the response. Use a comma to separate multiple sub-resources. Valid values: `custom_fields`, `list_memberships`, `taggings`, `notes`,`phone_numbers`, `street_addresses`, `sms_channel`.
	 * @param string $sms_status Use to get contacts by their SMS status. This parameter accepts one or more comma separated values: `all`, `explicit`, `unsubscribed`, `pending_confirmation`, `not_set`.
	 * @param bool $include_count Set `include_count=true` to include the total number of contacts (`contacts_count`) that meet all search criteria in the response body.
	 * @param int $limit Specifies the number of results displayed per page of output in the response, from 1 - 500, default = 50.
	 */
	public function get(?string $status = null, ?string $email = null, ?string $lists = null, ?string $segment_id = null, ?string $tags = null, ?string $updated_after = null, ?string $updated_before = null, ?string $created_after = null, ?string $created_before = null, ?string $optout_after = null, ?string $optout_before = null, ?string $include = null, ?string $sms_status = null, ?bool $include_count = null, ?int $limit = null) : array
		{

		if (null !== $status)
			{
			$parts = \explode(',', $status);
			$validValues = ['all', 'active', 'deleted', 'not_set', 'pending_confirmation', 'temp_hold', 'unsubscribed'];

			foreach ($parts as $part)
				{
				if (! \in_array(\trim($part), $validValues))
					{
					throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter status containing value '{$part}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
					}
				}
			}

		if (null !== $include)
			{
			$parts = \explode(',', $include);
			$validValues = ['custom_fields', 'list_memberships', 'phone_numbers', 'street_addresses', 'taggings', 'notes', 'sms_channel'];

			foreach ($parts as $part)
				{
				if (! \in_array(\trim($part), $validValues))
					{
					throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter include containing value '{$part}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
					}
				}
			}

		if (null !== $sms_status)
			{
			$parts = \explode(',', $sms_status);
			$validValues = ['all', 'explicit', 'unsubscribed', 'pending_confirmation', 'not_set'];

			foreach ($parts as $part)
				{
				if (! \in_array(\trim($part), $validValues))
					{
					throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter sms_status containing value '{$part}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
					}
				}
			}

		return $this->doGet(['status' => $status, 'email' => $email, 'lists' => $lists, 'segment_id' => $segment_id, 'tags' => $tags, 'updated_after' => $updated_after, 'updated_before' => $updated_before, 'created_after' => $created_after, 'created_before' => $created_before, 'optout_after' => $optout_after, 'optout_before' => $optout_before, 'include' => $include, 'sms_status' => $sms_status, 'include_count' => $include_count, 'limit' => $limit, ]);
		}

	/**
	 * POST (create) a Contact
	 *
	 * Creates a new contact resource; you must include the `create_source`
	 * property and at least one of the following properties when creating
	 * a new contact: `first_name`, `last_name`, or `email_address` (`email_address`
	 * must be unique for each contact).
	 *
	 * @param \PHPFUI\ConstantContact\Definition\ContactPostRequest $body The JSON payload defining the contact
	 */
	public function post(\PHPFUI\ConstantContact\Definition\ContactPostRequest $body) : array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}
	}
