<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $id Identifies the MyLibrary file.
 * @property string $name The file name.
 * @property int $height The image height.
 * @property int $width The image width.
 * @property int $size The image size.
 * @property string $url The image URL.
 * @property string $description The image description.
 * @property string $folder The image folder
 * @property string $source The application that uploaded this image.
 * @property string $type The image format.
 * @property string $status THe image status.
 * @property \PHPFUI\ConstantContact\Definition\Thumbnail $thumbnail
 * @property bool $image Boolean indicating if this file is an image.
 * @property int $folder_id Identifies a folder in MyLibrary.
 * @property string $external_url The external url for the file.
 * @property string $modified_date Identifies the time a user last modified the file.
 * @property string $added_date Identifies the time a user originally added the file to MyLibrary.
 * @property string $external_file_id External identifier for the file.
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
