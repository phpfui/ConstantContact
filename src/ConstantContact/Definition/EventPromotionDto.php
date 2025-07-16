<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $assoc_activity_sub_type The type of associated activity
 * @property \PHPFUI\ConstantContact\UUID $campaign_activity_id The unique identifier for the campaign activity.
 * @property \PHPFUI\ConstantContact\UUID $document_id The unique identifier for the document.
 * @property \PHPFUI\ConstantContact\UUID $ext_id The external identifier.
 * @property bool $default Whether this is the default promotion.
 */
class EventPromotionDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'assoc_activity_sub_type' => 'string',
		'campaign_activity_id' => '\PHPFUI\ConstantContact\UUID',
		'document_id' => '\PHPFUI\ConstantContact\UUID',
		'ext_id' => '\PHPFUI\ConstantContact\UUID',
		'default' => 'bool',

	];
	}
