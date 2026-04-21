<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property float $duration_seconds The duration (or play time) of the video (in seconds). This should be set once by the client, and never change.
 * @property string $file_name The original file name of the video file. This should be set once by the client, and never change.
 * @property int $file_size_bytes The original file size of the video file in bytes. This should be set once by the client, and never change.
 * @property string $object_id The id of the video "object". This should be unique for each video that is uploaded to S3, and should be the same as the <code>object_id</code> returned from the endpoint to retrieve the upload URL. Typically, the URL of the video, when its <code>source</code> is <code>"s3"</code> will be a combination of an AWS base URL, the S3 bucket name, and this id. It should only ever be <code>null</code> for an uninitialized <code>VideoDto</code>. Once set, it should never change for a given <code>VideoDto</code>.
 * @property int $upload_elapsed_ms The amount of time it took to upload the video from the front-end app to S3 (in milliseconds). This is included for potential diagnostic and/or analytics purposes. This should be set once by the client, and never change. If {@code source} is set to {@code public}, this should be set to 0.
 * @property string $video_id The unique id for this video entry. This is generated automatically by the database and should be considered read-only. It should only ever be <code>null</code> for an un-saved <code>VideoDto</code>.
 * @property array<\PHPFUI\ConstantContact\Definition\VideoSourceDto> $video_sources Data indicating location(s) of the "source" of the video, and its "status". Initially, there should be a single entry, with the <code>source</code> set to <code>s3</code>. The URL will be generated based on the known bucket name and the S3 object id before persisting. As this video is posted to the target profile(s), additional metadata items will be added, indicating the "source" as the target network, and the URLs for the video and thumbnail as the uploaded resource, and then populating the profile id and profile post id. Once all posts have been complete, the "original" <code>source: "s3"</code> data will be removed, since the S3 object may no longer be available. <strong>The client should initially only set a single source of type <code>"s3"</code> before saving, and this field should be considered read-only after that.</strong>
 */
class VideoDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'duration_seconds' => 'float',
		'file_name' => 'string',
		'file_size_bytes' => 'int',
		'object_id' => 'string',
		'upload_elapsed_ms' => 'int',
		'video_id' => 'string',
		'video_sources' => 'array<\PHPFUI\ConstantContact\Definition\VideoSourceDto>',

	];
	}
