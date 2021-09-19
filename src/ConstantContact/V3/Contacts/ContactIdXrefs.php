<?php

// Generated file. Do not edit by hand. Use generate.php in project root.

namespace PHPFUI\ConstantContact\V3\Contacts;

class ContactIdXrefs extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contacts/contact_id_xrefs');
		}


	/**
	 * GET a collection of V2 and V3 API contact IDs
	 *
	 * <div class="Msg Msg--warning"><p class="note-text">Use this endpoint
	 * to migrate your locally stored V2 contact ids to the new V3 format.
	 * Developers are expected to use this endpoint sparingly. This endpoint
	 * is NOT intended for regular or repeated use. Constant Contact will eventually
	 * deprecate and remove this endpoint.</p></div>
	 * 
	 * This GET call retrieves a collection of cross-referenced contact sequence
	 * IDs (`id` used in the V2 API) and UUIDs (`contact_id` used in the V3
	 * API). This endpoint is intended for developers who have an existing
	 * V2 API integration, and are migrating their users to a new V3 API integration.
	 * The V2 and V3 APIs use different resource ID formats. Use the `sequence_ids`
	 * query parameter to specify a set of comma delimited V2 contacts ids
	 * to cross-referenced with their V3 `contact_ids`. See [Migrating to V3](/api_guide/migration_overview.html)
	 * to learn more.
	 * 
	 *
	 * @param string $sequence_ids Comma delimited list of V2 API contact `ids` to cross-reference with the V3 API `contact_id` value. Endpoint accepts a maximum of 500 ids at a time.
	 */
	public function get(string $sequence_ids) : array
		{
		return $this->doGet(['sequence_ids' => $sequence_ids, ]);
		}
	}