<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Social;

class Profiles extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/social/profiles');
		}

	/**
	 * GET social media profiles
	 *
	 * Retrieves all social media profiles connected to the account. A profile
	 * represents a single account on a social network (such as a Facebook
	 * Business Page, a LinkedIn Company Page, or an Instagram Business account)
	 * that the user has connected to Constant Contact.
	 *
	 * Use the `include=accessible` query parameter to additionally check whether
	 * each profile is currently accessible for posting. Profiles that are
	 * not currently accessible will fail if used to publish a post.
	 *
	 *
	 * @param array $include Optional sub-resources to include. Use `accessible` to check if profiles are accessible on the network.
	 */
	public function get(?array $include = null) : ?array
		{

		if (null !== $include)
			{
			$validValues = ['accessible'];

			if (! \in_array($include, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter include with value '{$include}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		return $this->doGet(['include' => $include, ]);
		}

	/**
	 * @return ?array<\PHPFUI\ConstantContact\Definition\Profiles>
	 */
	public function getTyped(?array $include = null) : ?array
		{
		$data = $this->get($include);

		if (null === $data)
			{
			return null;
			}

		$array = [];

		foreach ($data as $object)
			{
			$array[] = new \PHPFUI\ConstantContact\Definition\Profiles($object);
			}

		return $array;
		}
	}
