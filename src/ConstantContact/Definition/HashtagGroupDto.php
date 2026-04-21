<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $hashtag_group_id The database id for this hashtag group.<p>This should always be <code>null</code> when creating a new hashtag group. When updating a hashtag group, this should either be set to <code>null</code>, or be the same value as when the group was retrieved.</p>
 * @property string $hashtag_group_name The human-readable name for this group.<p>This name will be sanitized before saving, which may include trimming whitespace, truncation, and/or removing invalid characters. If the sanitized name results in a blank string, it will not be able to be saved, and any create or update operation will fail.<br>The name is currently limited to a maximum of 150 "characters", but the effective length may be shorter, depending on whether some special characters, such as emoji, are used.</p>
 * @property array $hashtag_names The list of hashtag names for this group.<p>Hashtag <em>names</em> do not include any leading '#' character. They cannot consist of any characters other than alphanumeric characters and '_' (underscore). The hashtag name cannot begin or end with an underscore. Hashtag names may begin with a letter or a number, and may consist of only numbers. Hashtag names are currently limited to a maximum of 30 characters.<br>The list will maintain its order when persisted and retrieved. If duplicates exist in the list, they will be removed when saving, and the first of the duplicates will retain its position.</p>
 */
class HashtagGroupDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'hashtag_group_id' => 'string',
		'hashtag_group_name' => 'string',
		'hashtag_names' => 'array',

	];
	}
