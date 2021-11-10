<?php

namespace Tools;

class Generator
	{
	private string $rootPath = 'src/ConstantContact/';

	private string $definitionNamespace = 'PHPFUI\\ConstantContact\\Definition';

	private array $duplicateClasses = [
		'CustomFieldResource2' => 'CustomFieldResource',
		'ContactResource2' => 'ContactResource',
		'ContactList2' => 'ContactList',
		'Tag2' => 'Tag',
		'Status' => 'Status',
		'Source' => 'Source',
		];

	private array $generatedClasses = [];

	public function makeClasses(string $version, array $paths) : void
		{
		\ksort($paths);

		foreach ($paths as $path => $properties)
			{
			$this->generateClass($version, $path, $properties);
			}
		}

	public function generateClass(string $version, string $path, array $properties) : void
		{
		$apiPath = $version . $path;
		$className = $this->getClassName($apiPath);
		$parts = \explode('\\', $className);
		$class = \array_pop($parts);
		$namespace = \implode('\\', $parts);
		$dir = $this->rootPath . \str_replace('\\', '/', $namespace);

		if (! \is_dir($dir))
			{
			\mkdir($dir, recursive: true);
			}

		$class = $this->getUniqueClassName($namespace, $class);

		$this->writeClass($namespace, $class, $apiPath, $properties);
		}

	private function getUniqueClassName(string $namespace, string $class) : string
		{
		if (isset($this->duplicateClasses[$class]))
			{
			return $this->duplicateClasses[$class];
			}

		$fullName = $namespace . '\\' . $class;
		if (isset($this->generatedClasses[$fullName]))
			{
			if ('Links' == $class)
				{
				$class = 'Link';
				}
			elseif ('StreetAddress' == $class)
				{
				$class = 'StreetAddressRecord';
				}
			// trim the s off the end point for the singular
			elseif (str_ends_with($class, 'ies'))
				{
				$class = substr($class, 0, strlen($class) - 3);
				$class .= 'y';
				}
			else
				{
				$class = substr($class, 0, strlen($class) - 1);
				}
			$fullName = $namespace . '\\' . $class;
			}
		$this->generatedClasses[$fullName] = true;

		return $class;
		}

	public function makeDefinitions(array $definitions) : void
		{
		foreach ($definitions as $class => $properties)
			{
			$this->generateDefinition($class, $properties);
			}
		}

	public function generateDefinition(string $class, array $properties) : void
		{
		if (! isset($properties['type']))
			{
			return;
			}

		$class = str_replace('_', '', $class);
		if ('object' === $properties['type'])
			{
			$fields = [];
			$readonly = [];
			$minLength = [];
			$maxLength = [];
			$docBlock = [];
			$dollar = '$';

			foreach ($properties['properties'] ?? [] as $name => $details)
				{
				if ('self' == $name)
					{
					$name = $class;
					}
				if (isset($details['$ref']))
					{
					$type = $this->getTypeNameFromRef($details['$ref']);
					}
				else
					{
					$type = $details['type'];

					if ('object' == $type)
						{
						$namespace = $this->definitionNamespace;
						$baseName =  $this->getUniqueClassName($namespace, $this->getClassName($name));
						$type = '\\' . $namespace . '\\' . $baseName;
						$this->generateDefinition($baseName, $details);
						}

					if (isset($details['format']))
						{
						$type = $details['format'];
						}

					if ('number' == $type || \str_starts_with($type, 'int'))
						{
						$type = 'int';
						}
					elseif ($type == 'date-time')
						{
						$type = 'DateTime';
						}
					elseif ($type == 'date')
						{
						$type = '\PHPFUI\ConstantContact\Date';
						}
					elseif ($type == 'boolean')
						{
						$type = 'bool';
						}
					elseif ($type == 'uuid')
						{
						$type = '\PHPFUI\ConstantContact\UUID';
						}
					if (isset($details['enum']))
						{
						$originalType = $type;
						$type = $details['enum'];
						}

					if (isset($details['items']))
						{
						$items = $details['items'];
						$itemType = '';
						if (isset($items['$ref']))
							{
							$itemType = $this->getTypeNameFromRef($items['$ref']);
							}
						elseif (isset($items['type']) && ($items['format'] ?? '') == 'uuid')
							{
							$itemType = '\PHPFUI\ConstantContact\UUID';
							}
						if ('array' == $type && $itemType)
							{
							$type = 'array[' . $itemType . ']';
							if ($details['maxItems'] ?? false)
								{
								$type .= '[' . $details['maxItems'] . ']';
								}
							}
						}

					}
				$fields[$name] = $type;

				if (isset($details['minLength']))
					{
					$minLength[$name] = (int)$details['minLength'];
					}

				if (isset($details['maxLength']))
					{
					$maxLength[$name] = (int)$details['maxLength'];
					}
        // description: "The contact phone number to associate with the client account."
				if (isset($details['description']))
					{
					$description = $this->cleanDescription($details['description']);
					if (is_array($type))
						{
						$type = $originalType;
						}
					$type = str_replace('\\\\', '\\', $type);
					$docBlock[] = "{$type} {$dollar}{$name} {$description}";
					}
				}
			$this->generateFromTemplate($class, ['fields' => $fields, 'minLength' => $minLength, 'maxLength' => $maxLength, ], $docBlock);
			}
		}

	private function writeClass(string $namespace, string $class, string $apiPath, array $properties) : void
		{
		$methods = '';
		$dollar = '$';

		foreach ($properties as $method => $specs)
			{
			$ucMethod = \ucfirst($method);
			$enums = [];
			$csv = [];
			$parameters = [];
			$docblock = '';

			foreach ($specs['parameters'] as $parameter)
				{
				if (isset($parameter['schema']))
					{
					$type = $this->getTypeNameFromRef($parameter['schema']['$ref']);
					}
				else
					{
					$type = $this->getPHPType($parameter['type']);
					}
				$name = \str_replace(' ', '_', $parameter['name']);

				if (isset($parameter['enum']))
					{
					$enums[$name] = $parameter['enum'];
					}
				if (isset($parameter['format']) && 'csv' == $parameter['format'])
					{
					$csv[$name] = true;
					}

				$docblock .= "\n\t * @param {$type} {$dollar}{$name} {$parameter['description']}";
				$parameterString = $parameter['required'] ? '' : '?';
				$parameterString .= $type . ' $' . $name;

				if (! $parameter['required'])
					{
					$parameterString .= ' = null';
					}
				$parameters[$name] = $parameterString;
				}

			$methodBody = <<<'METHOD'


	/**
~summary~
	 *
~description~
	 *~docblock~
	 */
	public function ~method~(~parameters~) : ~returnType~
		{
~code~
		}
METHOD;
			$code = '';

			foreach ($enums as $name => $values)
				{
				$array = "['" . \implode("' , '", $values) . "']";
				$var = '$' . $name;
				if (isset($csv[$name]))
					{
					$code .= <<<CODE
		if (null !== {$var})
			{
			{$dollar}parts = explode(',', {$var});
			{$dollar}validValues = {$array};
			foreach ({$dollar}parts as {$dollar}part)
				{
				if (! in_array(trim({$dollar}part), {$dollar}validValues))
					{
					throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter {$name} containing value '{{$dollar}part}' is not one of (" . implode(', ', {$dollar}validValues) . ') in ' . __METHOD__);
					}
				}
			}

CODE;
					}
				else
					{
					$code .= <<<CODE
		if (null !== {$var})
			{
			{$dollar}validValues = {$array};
			if (! in_array({$var}, {$dollar}validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter {$name} with value '{{$var}}' is not one of (" . implode(', ', {$dollar}validValues) . ') in ' . __METHOD__);
				}
			}

CODE;
					}
				}

			$parameterArray = '[';

			foreach ($parameters as $name => $definition)
				{
				$getData = str_contains($definition, "\\Definition\\") ? '->getData()' : '';
				$parameterArray .= "'{$name}' => {$dollar}{$name}{$getData}, ";
				}
			$parameterArray .= ']';
			$code .= <<<ACTION
		return {$dollar}this->do{$ucMethod}({$parameterArray});
ACTION;

			$summary = $this->formatDescription($specs['summary']);
			$description = $this->formatDescription($specs['description']);
			$methods .= \str_replace(
				['~method~', '~parameters~', '~docblock~', '~summary~', '~description~', '~code~', '~returnType~'],
				[$method, \implode(', ', $parameters), $docblock, $summary, $description, $code, 'delete' != $method ? 'array' : 'bool'],
				$methodBody
			);
			}

		$php = <<<'PHP'
<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\~namespace~;

class ~class~ extends \PHPFUI\ConstantContact\Base
	{

	public function __construct(\PHPFUI\ConstantContact\Client $client)
		{
		parent::__construct($client, '~apiPath~');
		}
~methods~
	}
PHP;

		$php = \str_replace(
			['~namespace~', '~class~', '~apiPath~', '~methods~'],
			[$namespace, $class, $apiPath, $methods],
			$php
		);

		$classPath = $this->rootPath . \str_replace('\\', '/', $namespace . '/' . $class . '.php');
		if (! \file_put_contents($classPath, $php))
			{
			throw new \Exception("Error writing file {$classPath}");
			}
		}

	private function getPHPType(string $type) : string
		{
		switch($type)
			{
			case 'boolean':
				return 'bool';

			case 'file':
				return 'string';

			case 'integer':
				return 'int';
			}

		return $type;
		}

	private function getClassName(string $path) : string
		{
		$parts = \explode('/', $path);
		$className = '';

		foreach ($parts as $part)
			{
			if (! \strlen($part) || '{' == $part[0])
				{
				continue;
				}
			$nameParts = \explode('_', $part);

			foreach ($nameParts as $namePart)
				{
				$className .= \ucfirst($namePart);
				}
			$className .= '\\';
			}

		return \trim($className, '\\');
		}

	private function cleanDescription(string $description) : string
		{
		// fix issues in documentation
		return str_replace(['(/api_guide/', '<a/>', 'href="/api_guide/'],
											 ['(https://v3.developer.constantcontact.com/api_guide/', '</a>', 'href="https://v3.developer.constantcontact.com/api_guide/'],
											 $description);
		}

	private function formatDescription(string $description) : string
		{
		$description = $this->cleanDescription($description);
		$lines = \explode("\n", $description);
		$blocks = [];

		foreach ($lines as $line)
			{
			$line = \trim($line);
			$block = "\t *";

			foreach (\explode(' ', $line) as $word)
				{
				$block .= ' ' . $word;

				if (\strlen($block) > 70)
					{
					$blocks[] = $block;
					$block = "\t *";
					}
				}
			$blocks[] = $block;
			}

		return \implode("\n", $blocks);
		}

	private function generateFromTemplate(string $name, array $properties, array $docBlocks) : void
		{
		$backSlash = '\\';
		$template = <<<PHP
<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace {$this->definitionNamespace};

	/**

PHP;

		foreach ($docBlocks as $docBlock)
			{
			$docBlock = trim($docBlock);
			$template .= "\t * @var {$docBlock}\n";
			}

		$template .= "\t */

class ~class~ extends {$backSlash}{$this->definitionNamespace}\Base
	{
";

		foreach ($properties as $fields => $values)
			{
			if (! $values)
				{
				continue;
				}
			$output = "\n\tprotected static array " . '$' . $fields . " = [\n";

			// set constants correctly, ints are OK as is
			foreach ($values as $field => $value)
				{
				switch (\gettype($value))
					{
					case 'array':
						foreach ($value as $index => $enum)
							{
							if (! is_numeric($enum))
								{
								$value[$index] = "'{$enum}'";
								}
							}
						unset ($enum);
						$value = "[" . implode(", ", $value) . "]";
						break;

					case 'string':
						$value = "'{$value}'";

						break;

					case 'boolean':
						$value = $value ? 'true' : 'false';

						break;
					}

				$output .= "\t\t'{$field}' => {$value},\n";
				}

			$output .= "\n\t];\n";
			$template .= $output;
			}
			$template = \str_replace('~class~', $name, $template) . "\t}";

			$path = __DIR__ . "/../src/ConstantContact/Definition/{$name}.php";
			if (! \file_put_contents($path, $template))
				{
				throw new \Exception("Error writing file {$path}");
				}
		}

	private function getTypeNameFromRef(string $ref) : string
		{
		$parts = \explode('/', str_replace('_', '', $ref));
		return '\\' . $this->definitionNamespace . '\\' . \array_pop($parts);
		}

	}
