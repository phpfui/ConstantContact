<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property int $number The number of items included in this response (in <code>_embedded.hashtag_groups</code>).<p>The maximum items that can be returned in a single call is currently limited to the lesser of the <code>limit</code> argument and 5.</p>
 * @property int $size The size of the page of results requested, either via the <code>limit</code> argument or the default of 5.
 * @property int $totalElements The total number of results available.<p>If the <code>totalElements</code> is greater than <code>size</code>, then it is necessary to make multiple requests for all of the available <em>pages</em> of results.</p>
 * @property int $totalPages The total number of pages available.<p>The pages can be iterated through using the <code>next</code> and <code>prev</code> links, or by manually calling the endpoint and iterating through the pages using the <code>page</code> argument.</p>
 */
class ResourcePageMetadata extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'number' => 'int',
		'size' => 'int',
		'totalElements' => 'int',
		'totalPages' => 'int',

	];
	}
