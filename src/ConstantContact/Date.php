<?php

namespace PHPFUI\ConstantContact;

/**
 * Simple Date class for JSON output
 */
class Date extends \DateTime
	{

	public function __toString() : string
		{
		return $this->format('Y-m-d');
		}
	}
