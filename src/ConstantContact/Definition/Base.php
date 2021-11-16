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

	public function __construct(array $initialValues = [])
		{
		foreach (static::$fields as $field => $type)
			{
			if (! empty($initialValues[$field]))
				{
				$this->setFields[$field] = true;
				$this->data[$field] = $initialValues[$field];
				}
			elseif (! \is_array($type) && ! isset(self::$scalars[$type]))
				{
				if (\str_starts_with($type, 'array'))
					{
					$this->data[$field] = [];
					}
				else
					{
					$this->data[$field] = new $type();
					}
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
		else
			{
			$expectedType = \trim($expectedType, '\\');

			if ('array' == $type && \str_starts_with($expectedType, 'array'))
				{
				$arrayStart = \strpos($expectedType, '<');

				if ($arrayStart)
					{
					$arrayEnd = \strpos($expectedType, '>');

					$arrayType = \trim(\substr($expectedType, $arrayStart + 2, $arrayEnd - $arrayStart - 2), '\\');
					}
				else
					{
					$arrayType = 'string';
					}

				foreach ($value as $index => $element)
					{
					$elementType = \get_debug_type($element);

					if ($arrayType != $elementType)
						{
						throw new \PHPFUI\ConstantContact\Exception\InvalidType(static::class . "::{$field} should be an array<{$arrayType}> but index {$index} is of type {$elementType}");
						}
					}
				}
			elseif ($expectedType != $type)
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidType(static::class . "::{$field} is of type {$type} but should be type {$expectedType}");
				}
			}

		if (isset(static::$minLength[$field]))
			{
			$minLength = static::$minLength[$field];

			if ('array' == $type && \str_starts_with($expectedType, 'array'))
				{
				if (\count($value) < $minLength)
					{
					throw new \PHPFUI\ConstantContact\Exception\InvalidLength(static::class . "::{$field} array must have at least {$minLength} values");
					}
				}
			elseif (\strlen($value) < $minLength)
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidLength(static::class . "::{$field} must be at least {$minLength} characters long");
				}
			}

		if (isset(static::$maxLength[$field]))
			{
			$maxLength = static::$maxLength[$field];

			if ('array' == $type && \str_starts_with($expectedType, 'array'))
				{
				if (\count($value) > $maxLength)
					{
					throw new \PHPFUI\ConstantContact\Exception\InvalidLength(static::class . "::{$field} array has a limit of {$maxLength} values");
					}
				}
			elseif (\strlen($value) > $maxLength)
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
					$result[$field] = $value->getData();
					}
				elseif (\is_array($value))
					{
					if (! \count($value))
						{
						continue;
						}
					$result[$field] = [];

					foreach ($value as $name => $item)
						{
						if ($item instanceof self)
							{
							$item = $item->getData();
							}
						elseif (\is_object($item))
							{
							$item = (string)$item;
							}
						$result[$field][$name] = $item;
						}
					}
				else
					{
					$result[$field] = \is_object($value) ? (string)$value : $value;
					}
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
