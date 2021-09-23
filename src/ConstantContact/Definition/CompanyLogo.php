<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $url The internal URL used to get the company logo image file hosted locally in your account's MyLibrary.
	 * @var string $external_url The external URL used to get the company logo image file that is hosted on an external website.
	 * @var string $internal_id The internal ID used to identify the image hosted in your account's MyLibrary.
	 */

class CompanyLogo extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'url' => 'string',
		'external_url' => 'string',
		'internal_id' => 'string',

	];
	}