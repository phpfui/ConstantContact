<?php

namespace PHPFUI\ConstantContact\Definition;

class ActivityStatusExportLink extends \PHPFUI\ConstantContact\Definition\Base
	{
	/**
	 * @var PHPFUI\ConstantContact\Definition\ActivityStatusExportLink $ActivityStatusExportLink HATEOS-style link to the activity status (this object).
	 * @var PHPFUI\ConstantContact\Definition\Results $results Link to an activity result resource; as an example, for file_export, the link to the exported contacts file.
	 */

	protected static array $fields = [
		'ActivityStatusExportLink' => 'PHPFUI\\ConstantContact\\Definition\\ActivityStatusExportLink',
		'results' => 'PHPFUI\\ConstantContact\\Definition\\Results',

	];
	}