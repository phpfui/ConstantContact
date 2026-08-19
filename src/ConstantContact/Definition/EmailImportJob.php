<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $import_job_id Identifies the import job.
 * @property string $status Status of the import job
 * @property int $created_at Timestamp of when the import job was created.
 * @property \PHPFUI\ConstantContact\Definition\EmailCampaign $result
 * @property string $error Error string describing what caused the import job to fail.
 */
class EmailImportJob extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'import_job_id' => 'string',
		'status' => 'string',
		'created_at' => 'int',
		'result' => '\PHPFUI\ConstantContact\Definition\EmailCampaign',
		'error' => 'string',

	];
	}
