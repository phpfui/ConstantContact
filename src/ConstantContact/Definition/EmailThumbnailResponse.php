<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $status Status indicating if the thumbnail is still generating or if it has already been generated.
 * @property string $thumbnail_url URL of thumbnail. Returned even if the thumbnail is still generating.
 */
class EmailThumbnailResponse extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'status' => 'string',
		'thumbnail_url' => 'string',

	];
	}
