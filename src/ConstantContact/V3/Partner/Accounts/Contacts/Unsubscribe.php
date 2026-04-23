<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Partner\Accounts\Contacts;

class Unsubscribe extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/partner/accounts/{encoded_account_id}/contacts/unsubscribe');
		}

	/**
	 * POST Unsubscribe Contacts
	 *
	 * Use to unsubscribe contacts from partner client accounts. Identify the
	 * contacts to unsubscribe using the `email_address` parameter. To unsubscribe
	 * a single contact from all partner client accounts, specify the contacts
	 * `email_address` and set the `global_unsubscribe` parameter to `true`.
	 *
	 *
	 * @param string $encoded_account_id The encoded account ID that uniquely identifies the partner's client account.
	 * @param \PHPFUI\ConstantContact\Definition\PartnerAccountsContactsUnsubscribe $body The JSON payload.
	 */
	public function post(string $encoded_account_id, \PHPFUI\ConstantContact\Definition\PartnerAccountsContactsUnsubscribe $body) : ?array
		{

		return $this->doPost(['encoded_account_id' => $encoded_account_id, 'body' => $body->getData(), ]);
		}

	public function postTyped(string $encoded_account_id, \PHPFUI\ConstantContact\Definition\PartnerAccountsContactsUnsubscribe $body) : ?\PHPFUI\ConstantContact\Definition\PartnerUnsubscribeResponse
		{
		$data = $this->post($encoded_account_id, $body);

		return $data ? new \PHPFUI\ConstantContact\Definition\PartnerUnsubscribeResponse($data) : null;
		}

	}
