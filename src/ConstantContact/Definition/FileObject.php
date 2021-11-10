<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var int $id Identifies the MyLibrary file.
	 * @var string $name The file name.
	 * @var int $height The image height.
	 * @var int $width The image width.
	 * @var int $size The image size.
	 * @var string $url The image URL.
	 * @var string $description The image description.
	 * @var string $folder The image folder
	 * @var string $source The application that uploaded this image.
	 * @var string $type The image format.
	 * @var string $status THe image status.
	 * @var bool $image Boolean indicating if this file is an image.
	 * @var int $folder_id Identifies a folder in MyLibrary.
	 * @var string $external_url The external url for the file.
	 * @var string $modified_date Identifies the time a user last modified the file.
	 * @var string $added_date Identifies the time a user originally added the file to MyLibrary.
	 * @var string $external_file_id External identifier for the file.
	 */

class FileObject extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'id' => 'int',
		'name' => 'string',
		'height' => 'int',
		'width' => 'int',
		'size' => 'int',
		'url' => 'string',
		'description' => 'string',
		'folder' => 'string',
		'source' => ['MyComputer', 'StockImage', 'Facebook', 'Instagram', 'Bigstock', 'Mobile', 'Artwork', 'Canva'],
		'type' => ['GIF', 'JPG', 'PDF', 'PNG', 'DOC', 'DOCX', 'XLS', 'XLSX', 'PPT', 'PPTX'],
		'status' => ['Active', 'Processing', 'VirusFound', 'Deleted', 'Purged', 'Failed'],
		'thumbnail' => '\PHPFUI\ConstantContact\Definition\Thumbnail',
		'image' => 'bool',
		'folder_id' => 'int',
		'external_url' => 'string',
		'modified_date' => 'string',
		'added_date' => 'string',
		'external_file_id' => 'string',

	];
	}