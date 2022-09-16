<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\V3\Contacts;

class Counts extends \PHPFUI\ConstantContact\Base
	{
	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '/v3/contacts/counts');
		}

	/**
	 * GET Contact Consent Counts
	 *
	 * Use to get the total contacts count for the account and the total contact-consent
	 * counts for each consent state. Optionally, to include the total number
	 * of new subscribers in the results, use `new_subscribers` in the `include`
	 * query parameter. To optimize open rates, reduce spam reports, and help
	 * grow your business,  you must value your contact's consent to receive
	 * or to not receive your emails.
	 *
	 * @param string $include Use to return the total number of new contact subscribers in the results.
	 */
	public function get(?string $include = null) : array
		{

		if (null !== $include)
			{
			$validValues = ['new_subscriber'];

			if (! \in_array($include, $validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter include with value '{$include}' is not one of (" . \implode(', ', $validValues) . ') in ' . __METHOD__);
				}
			}

		return $this->doGet(['include' => $include, ]);
		}
	}
