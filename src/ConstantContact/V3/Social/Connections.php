<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Social;

class Connections extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/social/connections');
		}

	/**
	 * GET social network connections
	 *
	 * Retrieves all social network accounts connected to the Constant Contact
	 * account, with support for multiple accounts per social network.
	 *
	 * A connection represents the authorization link between a Constant Contact
	 * account and a single account on a social network (Facebook, Instagram,
	 * LinkedIn, TikTok, etc.). Each connection includes account information
	 * about the connected user on that network (display name, username, image,
	 * etc.) and the current status of the connection (whether it's active,
	 * rate-limited, or has any errors).
	 *
	 * Note that a single connection may have multiple profiles (pages) associated
	 * with it — use `GET /social/profiles` to retrieve the individual profiles.
	 *
	 *
	 *
	 */
	public function get() : ?array
		{

		return $this->doGet([]);
		}

	public function getTyped() : ?\PHPFUI\ConstantContact\Definition\ConnectionResponseDto
		{
		$data = $this->get();

		return $data ? new \PHPFUI\ConstantContact\Definition\ConnectionResponseDto($data) : null;
		}
	}
