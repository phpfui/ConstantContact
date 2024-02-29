<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\UUID> $contact_ids Exports up to 500 specific contacts. This property is mutually exclusive with <code>list_ids</code>.
 * @property array<\PHPFUI\ConstantContact\UUID> $list_ids Exports all of the contacts inside of up to 50 contact lists. This property is mutually exclusive with <code>contact_ids</code>.
 * @property int $segment_id Specify the <code>segment_id</code> from which you want to export all contacts that meet the specified <code>segment_criteria</code>. This property is mutually exclusive with <code>contact_ids</code> and <code>list_ids</code>. You can only specify one <code>segment_id</code>.
 * @property array $fields Use this array to export specific contact fields. You must export <code>email_address</code> to successfully export <code>email_optin_source</code>, <code>email_optin_date</code>, <code>email_optout_source</code>, <code>email_optout_date</code>, or <code>email_optout_reason</code>.
 * @property string $status Allows you to export only contacts that have a specific status value. Possible values are <code>active</code>, <code>unsubscribed</code>, or <code>removed</code>
 */
class ContactsExport extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_ids' => 'array<\PHPFUI\ConstantContact\UUID>',
		'list_ids' => 'array<\PHPFUI\ConstantContact\UUID>',
		'segment_id' => 'int',
		'fields' => 'array',
		'status' => 'string',

	];

	protected static array $maxLength = [
		'contact_ids' => 500,
		'list_ids' => 50,

	];
	}
