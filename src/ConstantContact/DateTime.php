<?php

namespace PHPFUI\ConstantContact;

/**
 * Simple Date class for JSON output
 */
class DateTime extends \DateTime
	{
	public function __toString() : string
		{
		return $this->format('Y-m-d\TH:i:s\Z');
		}
	}
