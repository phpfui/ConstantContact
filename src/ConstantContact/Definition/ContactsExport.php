<?php

namespace PHPFUI\ConstantContact\Definition;

class ContactsExport extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var array $contact_ids Exports up to 500 specific contacts. This property is mutually exclusive with <code>list_ids</code>.
	 * @var array $list_ids Exports all of the contacts inside of up to 50 contact lists. This property is mutually exclusive with <code>contact_ids</code>.
	 * @var int $segment_id Specify the <code>segment_id</code> from which you want to export all contacts that meet the specified <code>segment_criteria</code>. This property is mutually exclusive with <code>contact_ids</code> and <code>list_ids</code>. You can only specify one <code>segment_id</code>.
	 * @var array $fields Use this array to export specific contact fields. You must export <code>email_address</code> to successfully export <code>email_optin_source</code>, <code>email_optin_date</code>, <code>email_optout_source</code>, <code>email_optout_date</code>, or <code>email_optout_reason</code>.
	 * @var string $status Allows you to export only contacts that have a specific status value. Possible values are <code>active</code>, <code>unsubscribed</code>, or <code>removed</code>
	 */

	protected static array $fields = [
		'contact_ids' => 'array',
		'list_ids' => 'array',
		'segment_id' => 'int',
		'fields' => 'array',
		'status' => ['active', 'unsubscribed', 'removed'],

	];
	}