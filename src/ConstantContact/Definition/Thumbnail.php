<?php

namespace PHPFUI\ConstantContact\Definition;

class Thumbnail extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var int $width Thumbnail width.
	 * @var int $height Thumbnail height.
	 * @var string $url Thumbnail url.
	 */

	protected static array $fields = [
		'width' => 'int',
		'height' => 'int',
		'url' => 'string',

	];
	}