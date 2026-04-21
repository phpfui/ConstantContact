<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property bool $is_preview Whether or not the linkMetadata has to be fetched for this particular link
 * @property string $link_id
 * @property array<\PHPFUI\ConstantContact\Definition\LinkMetadata> $link_metadata Metadata like text, description, image associated with the link. Writing to this stores a placeholder value for link metadata. Supporting networks will store their own link metadata upon publishing the link.
 * @property string $linked_activity_id If the link url is related to another activity (i.e. URL of a sign up landing page, shoppable landing page, email permalink, etc) this is the activity id of the related activity.
 * @property string $long_url the long version of the url by the UrlShortener service. Each component of the long link url must be appropriately encoded such that it does not include any illegal characters. Example: https://www.host.com/path+with%20space?q=query%20with+space#fragment+with%20space
 * @property string $short_url the shortened url by the UrlShortener service. Each component of the shortened link url must be appropriately encoded such that it does not include any illegal characters. Example: https://www.host.com/path+with%20space?q=query%20with+space#fragment+with%20space
 * @property string $url The url as entered by the user. May or may not include the protocol: 'google.com', 'www.google.com', 'http://google.com', 'http://google.com/'. Each component of the link url must be appropriately encoded such that it does not include any illegal characters. Example: https://www.host.com/path+with%20space?q=query%20with+space#fragment+with%20space
 */
class LinkDto extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'is_preview' => 'bool',
		'link_id' => 'string',
		'link_metadata' => 'array<\PHPFUI\ConstantContact\Definition\LinkMetadata>',
		'linked_activity_id' => 'string',
		'long_url' => 'string',
		'short_url' => 'string',
		'url' => 'string',

	];
	}
