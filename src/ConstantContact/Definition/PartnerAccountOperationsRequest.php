<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property string $account_operation_url The API method path for the request you are sending on behalf of a managed child account. This value should be a V3 API URL without the https://api.cc.email/v3 base url and with any path parameter names included. For example: <code>/emails/activities/{campaign_activity_id}</code>.
 * @property string $account_operation_method The http method for the request you are sending on behalf of a managed child account.
 * @property string $account_operation_payload The request payload for the request you are sending on behalf of a managed child account. If you provide a JSON payload using this parameter, make sure that the JSON is string escaped.
 * @property array<\PHPFUI\ConstantContact\Definition\QueryParamObject> $account_operation_query_parameters An array containing the query parameters for the request you are sending on behalf of a managed child account.
 * @property array<\PHPFUI\ConstantContact\Definition\PathParamObject> $account_operation_path_parameters An array containing the path parameters for the request you are sending on behalf of a managed child account.
 * @property array<\PHPFUI\ConstantContact\Definition\HeadersObject> $account_operation_headers An array containing the headers for the request you are sending on behalf of a managed child account.
 */
class PartnerAccountOperationsRequest extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected static array $fields = [
		'account_operation_url' => 'string',
		'account_operation_method' => ['GET', 'POST', 'PUT', 'DELETE', 'PATCH'],
		'account_operation_payload' => 'string',
		'account_operation_query_parameters' => 'array<\PHPFUI\ConstantContact\Definition\QueryParamObject>',
		'account_operation_path_parameters' => 'array<\PHPFUI\ConstantContact\Definition\PathParamObject>',
		'account_operation_headers' => 'array<\PHPFUI\ConstantContact\Definition\HeadersObject>',

	];
	}
