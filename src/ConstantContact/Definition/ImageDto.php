<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $image_id
 * @property string $url The url of the image. Each component of the image url must be appropriately encoded such that it does not include any illegal characters. Example: https://www.host.com/path+with%20space?q=query%20with+space#fragment+with%20space
 */
class ImageDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'image_id' => 'string',
		'url' => 'string',

	];
	}
