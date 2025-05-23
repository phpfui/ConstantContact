<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Contacts;

class SignUpForm extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contacts/sign_up_form');
		}

	/**
	 * Create or Update a Contact
	 *
	 * Use this method to create a new contact or update an existing contact.
	 * In the request body, this method requires including the `list_memberships`
	 * array as well as either the contact's `email_address` string or `sms_channel`
	 * object which includes the contact's SMS number. The information you
	 * specify determines if a new contact is either created (the email address
	 * or SMS number does not already exist in the account), or if an existing
	 * contact is updated (the email address or SMS number already exists).
	 * The SMS product feature does not need to be enabled to include a contacts
	 * SMS details.
	 *
	 * Updates to existing contacts are partial updates. This method only updates
	 * the contact properties you include in the request body. Updates append
	 * new contact lists or custom fields to the existing `list_memberships`
	 * or `custom_fields` arrays.
	 *
	 * If `email_address` is specified: <div class="Msg"><p class="note-text">Only
	 * use this method when a contact gives you their explicit permission to
	 * send them an email. It is a violation of anti-spam and telemarketing
	 * laws, as well as a serious violation of the Constant Contact Terms of
	 * Service to use the Opt-in features of the API to opt a contact back
	 * in without his or her own action and consent.</p></div>
	 *
	 * If `sms_channel` is specified: <div class="Msg"><p class="note-text">Only
	 * use this method when a contact gives you their explicit permission to
	 * send them an SMS. It is a violation of anti-spam and telemarketing laws,
	 * as well as a serious violation of the Constant Contact Terms of Service
	 * to use the Opt-in features of the API to opt a contact back in without
	 * his or her own action and consent.</p></div>
	 *
	 * When this method creates a new contact, it returns a 201 response code.When
	 * this method updates an existing contact, it returns a 200 response code.
	 * Updating a deleted contact restores the contact.
	 *
	 * The method automatically modifies the contact's `permission_to_send`
	 * and `opt_in_source` properties depending on the [Confirmed Opt-In](https://knowledgebase.constantcontact.com/articles/KnowledgeBase/5533-obtain-permission-to-send-email-campaigns-to-your-contacts-by-using-confirmed-opt-in)
	 * Constant Contact account setting:
	 *
	 * If Confirmed Opt-in is _enabled_, this method automatically sets the
	 * `permission_to_send` property as `pending_confirmation` for new contacts.
	 * If Confirmed Opt-in is _disabled_, this method automatically sets the
	 * `permission_to_send` property as explicit and the `opt_in_source` property
	 * as `Contact` for new contacts. Updated contacts have their `permission_to_send`
	 * property set as explicit.
	 *
	 *
	 * @param \PHPFUI\ConstantContact\Definition\ContactCreateOrUpdateInput $body A JSON request body payload that contains the contact resource you are creating or updating. The request body must contain the `email_address` property and `list_memberships` array, or the `sms_channel` object.
	 */
	public function post(\PHPFUI\ConstantContact\Definition\ContactCreateOrUpdateInput $body) : ?array
		{

		return $this->doPost(['body' => $body->getData(), ]);
		}

	public function postTyped(\PHPFUI\ConstantContact\Definition\ContactCreateOrUpdateInput $body) : ?\PHPFUI\ConstantContact\Definition\ContactCreateOrUpdateResponse
		{
		$data = $this->post($body);

		return $data ? new \PHPFUI\ConstantContact\Definition\ContactCreateOrUpdateResponse($data) : null;
		}

	}
