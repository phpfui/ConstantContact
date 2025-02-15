<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Contacts;

class Resubscribe extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contacts/resubscribe/{contact_id}');
		}

	/**
	 * PUT Resubscribe a Contact
	 *
	 * Use this endpoint to send a confirmation resubscribe email to a contact
	 * in order to get their confirmation to resubscribe. This endpoint also
	 * adds the resubscribed contact to the contact lists you specify in the
	 * request body. You can only send a resubscribe email to the unsubscribed
	 * contact once. The contact is not resubscribed until after you receive
	 * their confirmation.
	 *
	 * @param string $contact_id The ID that uniquely identifies the contact to resubscribe.
	 * @param \PHPFUI\ConstantContact\Definition\ContactResubscribeRequest $body The JSON payload used to specify one (or more) contact lists to which the contact requested to be resubscribed.
	 */
	public function put(string $contact_id, \PHPFUI\ConstantContact\Definition\ContactResubscribeRequest $body) : ?array
		{

		return $this->doPut(['contact_id' => $contact_id, 'body' => $body->getData(), ]);
		}
	}
