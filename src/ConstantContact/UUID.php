<?php

namespace PHPFUI\ConstantContact;

/**
 * Simple UUID class for JSON output
 */
class UUID
	{
	public function __construct(private string $uuid)
		{
		if (! preg_match('/^[a-f\d]{8}(-[a-f\d]{4}){4}[a-f\d]{8}$/i', $uuid))
			{
			throw new \PHPFUI\ConstantContact\Exception\InvalidValue($uuid . ' is not a valid UUID');
			}
		}

	public function __toString() : string
		{
		return $this->uuid;
		}
	}
