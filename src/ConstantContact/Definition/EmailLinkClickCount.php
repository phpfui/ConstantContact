<?php

namespace PHPFUI\ConstantContact\Definition;

	/**
	 * @var string $link_url The URL of a link in an email campaign activity. This URL is not normalized and appears the same as the URL in the email campaign activity.
	 * @var string $url_id The ID for a unique link URL in an email campaign activity.
	 * @var int $unique_clicks The number of unique contacts that clicked the link.
	 * @var string $list_action If the link uses the click segmentation feature, this property contains the action that contacts trigger when they click the link. Currently the only available action is <code>add</code>, which adds contacts that click the link to a contact list.
	 * @var PHPFUI\ConstantContact\UUID $list_id If the link uses the click segmentation feature, this property contains the contact list linked with the <code>list_action</code> property.
	 * @var string $link_tag Link tags are not currently available in email campaigns. By default, this method combines results for duplicate link URLs. Link tags will allow users to get a separate link click report for each unique <code>link_tag</code> value they use, even if URLs are not unique.
	 */

class EmailLinkClickCount extends \PHPFUI\ConstantContact\Definition\Base
	{

	protected static array $fields = [
		'link_url' => 'string',
		'url_id' => 'string',
		'unique_clicks' => 'int',
		'list_action' => ['add'],
		'list_id' => 'PHPFUI\ConstantContact\UUID',
		'link_tag' => 'string',

	];
	}