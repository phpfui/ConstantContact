<?php

namespace PHPFUI\ConstantContact\Definition;

abstract class Base
	{
	/**
	 * @var array<string, string | array> $fields indexed by field name containing field type.
	 *
	 * Valid types are:
	 * - bool
	 * - float
	 * - int
	 * - string
	 * - FQN (fully qualified name) PHP class
	 * - array<FQN>
	 * - array of case sensitive string or integer enums
	 */
	protected static array $fields = [];

	/**
	 * @var array<string, int> maximum allowed values. Arrays are size, int and float are values, strings are length.
	 */
	protected static array $maxLength = [];

	/**
	 * @var array<string, int> minimum allowed values. Arrays are size, int and float are values, strings are length.
	 */
	protected static array $minLength = [];

	/**
	 * @var array<string> required fields.
	 */
	protected static array $requiredFields = [];

	/**
	 * @var bool $constructingFromArray set to true if we are constructing from an array so we don't type check for objects
	 */
	private bool $constructingFromArray = false;

  /**
   * $var array<string, mixed> the actual object data by field name.
   */
	private array $data = [];

	/**
	 * @var array<string, bool> supported scalars
	 */
	private static array $scalars = [
		'bool' => true,
		'float' => true,
		'int' => true,
		'string' => true,
		'array' => true,
	];

  /**
   * @var array<string, bool> indicates which values are set to reduce data output.
   */
	private array $setFields = [];

	public function __construct(array $initialValues = [])
		{
		foreach ($initialValues as $field => $value)
			{
			$actualField = $field;

			if (\str_starts_with($field, 'cf_'))
				{
				$field = 'cf:custom_field_name';
				}
			$type = static::$fields[$field] ?? null;

			if (! $type)
				{
				continue;
				}

			if (! empty(static::$fields[$field]))
				{
				$this->constructingFromArray = true;
				$this->{$actualField} = $value;
				$this->constructingFromArray = false;
				}
			elseif (! \is_array($type) && ! isset(self::$scalars[$type]))
				{
				if (\str_starts_with($type, 'array'))
					{
					$this->data[$actualField] = [];
					}
				else
					{
					$this->data[$actualField] = new $type();
					}
				}
			}
		}

	/**
	 * Unset fields will return null
	 */
	public function __get(string $field) : mixed
		{
		$actualField = $field;

		if (\str_starts_with($field, 'cf_'))
			{
			$field = 'cf:custom_field_name';
			}

		if (! isset(static::$fields[$field]))
			{
			throw new \PHPFUI\ConstantContact\Exception\InvalidField(static::class . "::{$actualField} is not a valid field");
			}

		$this->setFields[$actualField] = true;

		return $this->data[$actualField] ?? null;
		}

	/**
	 * @return mixed value being set to allow for assignment chaining
	 */
	public function __set(string $field, mixed $value)
		{
		$actualField = $field;

		if (\str_starts_with($field, 'cf_'))
			{
			$field = 'cf:custom_field_name';
			}
		$expectedType = static::$fields[$field] ?? null;

		if (null === $expectedType)
			{
			throw new \PHPFUI\ConstantContact\Exception\InvalidField(static::class . "::{$actualField} is not a valid field");
			}

		$type = \get_debug_type($value);

		if (\is_array($expectedType))
			{
			if (! \in_array($value, $expectedType))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue(static::class . "::{$actualField} is {$value} but must be one of " . \implode(', ', $expectedType));
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
					$convertToObjects = ! isset(self::$scalars[$arrayType]);

					foreach ($value as $index => $element)
						{
						$elementType = \get_debug_type($element);

						// convert members of the array to the correct type if not a standard type
						if ($convertToObjects && ! \is_object($element))
							{
							$value[$index] = new $arrayType($element);

							continue;
							}

						if ($arrayType != $elementType)
							{
							throw new \PHPFUI\ConstantContact\Exception\InvalidType(static::class . "::{$actualField} should be an array[{$arrayType}] but index {$index} is of type {$elementType}");
							}
						}
					}
				}
			elseif ($expectedType != $type && ! $this->constructingFromArray)
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidType(static::class . "::{$actualField} is of type {$type} but should be type {$expectedType}");
				}
			elseif (\str_starts_with($expectedType, 'PHPFUI'))
				{
				if (\is_array($value) || $expectedType != $type)
					{
					$value = new $expectedType($value);
					}
				}
			}

		if (isset(static::$minLength[$field]))
			{
			$minLength = static::$minLength[$field];

			if ('array' == $type && \str_starts_with($expectedType, 'array'))
				{
				if (\count($value) < $minLength)
					{
					throw new \PHPFUI\ConstantContact\Exception\InvalidLength(static::class . "::{$actualField} array must have at least {$minLength} values");
					}
				}
			elseif ((\is_int($value) || \is_float($value)) && $value < $minLength)
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidLength(static::class . "::{$actualField} must be at least {$minLength}");
				}
			elseif (\strlen($value) < $minLength)
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidLength(static::class . "::{$actualField} must be at least {$minLength} characters long");
				}
			}

		if (isset(static::$maxLength[$field]))
			{
			$maxLength = static::$maxLength[$field];

			if ('array' == $type && \str_starts_with($expectedType, 'array'))
				{
				if (\count($value) > $maxLength)
					{
					throw new \PHPFUI\ConstantContact\Exception\InvalidLength(static::class . "::{$actualField} array has a limit of {$maxLength} values");
					}
				}
			elseif ((\is_int($value) || \is_float($value)) && $value > $maxLength)
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidLength(static::class . "::{$actualField} must be equal or less than {$maxLength}");
				}
			elseif (\strlen($value) > $maxLength)
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidLength(static::class . "::{$actualField} must be at less than {$maxLength} characters long");
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

		$this->setFields[$actualField] = true;
		$this->data[$actualField] = $value;
		}

	/**
	 * @return array representation of data
	 */
	public function getData() : array
		{
		$result = [];

		foreach (static::$requiredFields as $field)
			{
			if (! empty($this->setFields[$field]))
				{
				throw new \PHPFUI\ConstantContact\Exception\RequiredField(static::class . "::{$field} is required but not set.");
				}
			}

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
					$result[\str_replace('cf_', 'cf:', $field)] = \is_object($value) ? (string)$value : $value;
					}
				}
			}

		return $result;
		}

	/**
	 * @return array all the valid fields for the object. Index is field name and value is the type.
	 */
	public function getFields() : array
		{
		return static::$fields;
		}

	/**
	 * @return string pretty print JSON
	 */
	public function getJSON() : string
		{
		return \json_encode($this->getData(), JSON_PRETTY_PRINT);
		}

	/**
	 * More descriptive alternative to getData()
	 *
	 * @return array representation of data
	 */
	public function toArray() : array
		{
		return $this->getData();
		}
	}
