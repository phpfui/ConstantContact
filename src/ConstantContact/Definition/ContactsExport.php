<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property array<\PHPFUI\ConstantContact\UUID> $contact_ids Exports up to 500 specific contacts.  This property is mutually exclusive with all other filtering criteria except with<code>status</code>.
 * @property array<\PHPFUI\ConstantContact\UUID> $list_ids Exports all of the contacts inside of up to 50 contact lists. This property is mutually exclusive with all other filtering criteria except with either <code>status</code> or <code>exclude</code>.
 * @property array<\PHPFUI\ConstantContact\UUID> $tag_ids Exports contacts assigned one or more of the tags (<code>tag_id</code>) specified. This property is mutually exclusive with all other filtering criteria.
 * @property bool $new_subscriber Set to <code>true</code> to only export contacts that subscribed within the last 30 days. Default setting is <code>false</code>. This property is mutually exclusive with all other filtering criteria except  with either  <code>list_ids</code> or <code>exclude</code>.
 * @property int $segment_id Specify the <code>segment_id</code> from which you want to export all contacts that meet the specified <code>segment_criteria</code>. You can only specify one <code>segment_id</code>. This property is mutually exclusive with all other filtering criteria.
 * @property array $fields By default , all fields are returned. Use this array to only export specific contact fields. You must export <code>email_address</code> to successfully export <code>email_optin_source</code>, <code>email_optin_date</code>, <code>email_optout_source</code>, <code>email_optout_date</code>, or <code>email_optout_reason</code>.
 * @property string $status Allows you to export only contacts that have a specific status value. This property is mutually exclusive with all other filtering criteria except with either  <code>contact_ids</code> or <code>list_ids</code>.
 * @property \PHPFUI\ConstantContact\Definition\Exclude $exclude
 */
class ContactsExport extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'contact_ids' => 'array<\PHPFUI\ConstantContact\UUID>',
		'list_ids' => 'array<\PHPFUI\ConstantContact\UUID>',
		'tag_ids' => 'array<\PHPFUI\ConstantContact\UUID>',
		'new_subscriber' => 'bool',
		'segment_id' => 'int',
		'fields' => 'array',
		'status' => 'string',
		'exclude' => '\PHPFUI\ConstantContact\Definition\Exclude',

	];

	protected static array $maxLength = [
		'contact_ids' => 500,
		'list_ids' => 50,
		'tag_ids' => 50,

	];
	}
