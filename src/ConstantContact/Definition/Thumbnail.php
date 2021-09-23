<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var int $width Thumbnail width.
	 * @var int $height Thumbnail height.
	 * @var string $url Thumbnail url.
	 */

class Thumbnail extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'width' => 'int',
		'height' => 'int',
		'url' => 'string',

	];
	}