<?php

namespace PHPFUI\ConstantContact;

class Base
	{
	public function __construct(protected \PHPFUI\ConstantContact\Client $client, protected string $urlPath)
		{
		}

	public function success() : bool
		{
		return 200 == $this->client->getLastErrorNumber();
		}

	public function getResponseCode() : int
		{
		return $this->client->getLastErrorNumber();
		}

	public function getResponseText() : string
		{
		return $this->client->getBody();
		}

	/**
	 * If the endpoint is paginated, you can call next() to retrieve the next set of data.  If no next is provided, an empty array is returned.
	 *
	 * @return array filled with next part of the response from the endpoint, or empty if no next.
	 */
	public function next() : array
		{
		return $this->client->next();
		}

	protected function doDelete(array $parameters) : array
		{
		$url = $this->getUrl($parameters);

		return $this->client->delete($url, $parameters);
		}

	protected function doGet(array $parameters) : array
		{
		$url = $this->getUrl($parameters);

		return $this->client->get($url, $parameters);
		}

	protected function doPut(array $parameters) : array
		{
		$url = $this->getUrl($parameters);

		return $this->client->put($url, $parameters);
		}

	protected function doPost(array $parameters) : array
		{
		$url = $this->getUrl($parameters);

		return $this->client->post($url, $parameters);
		}

	protected function doPatch(array $parameters) : array
		{
		$url = $this->getUrl($parameters);

		return $this->client->patch($url, $parameters);
		}

	private function getUrl(array &$parameters) : string
		{
		$url = 'https://api.cc.email' . $this->urlPath;

		if (! \count($parameters))
			{
			return $url;
			}
		$parameter = '{' . \array_key_first($parameters) . '}';

		if (null !== \strpos($url, $parameter))
			{
			$url = \str_replace($parameter, \array_shift($parameters), $url);
			}

		return $url;
		}
	}
