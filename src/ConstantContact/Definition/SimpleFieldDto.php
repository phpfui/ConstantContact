<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $display_order If specified, determines the order in which to return a subset of contact's details. For example, if you want a contact's email address to display first, set the <code>display_order</code> to <code>1</code> within the <code>field_label</code>: <code>CONTACT_EMAIL_ADDRESS</code> details section.
 * @property string $field_label The label used to identify a field within each contact details section.
 * @property string $field_name The formatted name used to identify a field within each contact details section.
 * @property string $field_type Identifies the type of field. Acceptable values include; TEXT_AREA, DATE, SINGLE_SELECT,MULTI_SELECT, INFORMATIONAL, TERMS_CONDITIONS, ADDRESS, HEADER, DIVIDER, STATIC_TEXT.
 * @property string $label_key The label used to identify a contact's registration details.
 */
class SimpleFieldDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'display_order' => 'int',
		'field_label' => 'string',
		'field_name' => 'string',
		'field_type' => 'string',
		'label_key' => 'string',

	];
	}
