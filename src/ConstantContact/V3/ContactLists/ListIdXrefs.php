<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\ContactLists;

class ListIdXrefs extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contact_lists/list_id_xrefs');
		}


	/**
	 * GET a collection of V2 and V3 API List IDs
	 *
	 * <div class="Msg Msg--warning"><p class="note-text">Use this endpoint
	 * to migrate your locally stored V2 contact list data to the new V3 format.
	 * Developers are expected to use this endpoint sparingly. This endpoint
	 * is NOT intended for regular or repeated use. Constant Contact will eventually
	 * deprecate and remove this endpoint.</p></div>
	 * 
	 * This GET call retrieves a collection of cross-referenced list sequence
	 * IDs (`id` used in the V2 API) and UUIDs (`list_id` used in the V3 API).
	 * This endpoint is intended for developers who have an existing V2 API
	 * integration, and are migrating their users to a new V3 API integration.
	 * The V2 and V3 APIs use different resource ID formats. Use the `sequence_ids`
	 * query parameter to specify a set of comma delimited V2 list ids to cross-reference.
	 * See [Migrating Apps and Data to V3](https://v3.developer.constantcontact.com/api_guide/migration_overview.html)
	 * to learn more."
	 * 
	 *
	 * @param string $sequence_ids Comma delimited list of V2 API list `ids` to cross-reference with the V3 API `list_id` value. Endpoint accepts a maximum of 500 ids at a time.
	 */
	public function get(string $sequence_ids) : array
		{
		return $this->doGet(['sequence_ids' => $sequence_ids, ]);
		}
	}