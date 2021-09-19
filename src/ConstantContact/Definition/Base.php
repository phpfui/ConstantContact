<?php

namespace PHPFUI\ConstantContact\Definition;

abstract class Base
	{
	protected static array $fields = [];

	protected static array $minLength = [];

	protected static array $maxLength = [];

	private array $data = [];

	private array $setFields = [];

	private static array $scalars = [
		'bool' => true,
		'float' => true,
		'int' => true,
		'string' => true,
		'array' => true,
	];

	public function __construct()
		{
		foreach (static::$fields as $field => $type)
			{
			if (! \is_array($type) && ! isset(self::$scalars[$type]))
				{
				$this->data[$field] = new $type();
				}
			}
		}

	/**
	 * Unset fields will return null
	 */
	public function __get(string $field)
		{
		if (! isset(static::$fields[$field]))
			{
			throw new \PHPFUI\ConstantContact\Exception\InvalidField("{$field} is not a valid field for " . static::class);
			}

		$this->setFields[$field] = true;

		return $this->data[$field] ?? null;
		}

	public function __set(string $field, $value)
		{
		$expectedType = static::$fields[$field] ?? null;

		if (null === $expectedType)
			{
			throw new \PHPFUI\ConstantContact\Exception\InvalidField(static::class . "::{$field} is not a valid field");
			}
		$type = \get_debug_type($value);

		if (\is_array($expectedType))
			{
			if (! \in_array($value, $expectedType))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue(static::class . "::{$field} is {$value} but must be one of " . \implode(', ', $expectedType));
				}
			}
		elseif ($expectedType != $type)
			{
			throw new \PHPFUI\ConstantContact\Exception\InvalidType(static::class . "::{$field} is of type {$type} but should be type {$expectedType}");
			}

		if (isset(static::$minLength[$field]))
			{
			$minLength = static::$minLength[$field];

			if (\strlen($value) < $minLength)
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidLength(static::class . "::{$field} must be at least {$minLength} characters long");
				}
			}

		if (isset(static::$maxLength[$field]))
			{
			$maxLength = static::$maxLength[$field];

			if (\strlen($value) > $maxLength)
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidLength(static::class . "::{$field} must be at less than {$maxLength} characters long");
				}
			}
		// Do additional formatting
		switch ($type)
			{
			case 'double':
				// 2 decimal paces
				$value = \number_format($value, 2);

				break;
			}

		$this->setFields[$field] = true;

		return $this->data[$field] = $value;
		}

	public function getData() : array
		{
		$result = [];

		foreach ($this->data as $field => $value)
			{
			if (! empty($this->setFields[$field]))
				{
				if ($value instanceof self)
					{
					$value = $value->getData();
					}
				$result[$field] = $value;
				}
			}

		return $result;
		}

	public function getJSON() : string
		{
		return \json_encode($this->getData(), JSON_PRETTY_PRINT);
		}

	/**
	 * Return all the valid fields for the object. Index is field name and value is the type.
	 */
	public function getfields() : array
		{
		return static::$fields;
		}
	}
