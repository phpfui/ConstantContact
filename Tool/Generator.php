<?php

namespace Tool;

class Generator
	{
	private string $definitionNamespace = '\\PHPFUI\\ConstantContact\\Definition';

	private array $duplicateClasses = [
		'CustomFieldResource2' => 'CustomFieldResource',
		'ContactResource2' => 'ContactResource',
		'ContactList2' => 'ContactList',
		'Lin' => 'Link',
		'Link2' => 'Link',
		'Links' => 'Link',
		'PagingLinks2' => 'PagingLinks',
		'Results' => 'Result',
		'Tag2' => 'Tag',
		'Status' => 'Status',
		'Source' => 'Source',
	];

	private array $generatedClasses = [];

	private string $nl;

	private string $rootPath = 'src/ConstantContact/';

	public function __construct()
		{
		$this->nl = 'WIN' === \strtoupper(\substr(PHP_OS, 0, 3)) ? "\r\n" : "\n";
		}

	public function deleteClasses(string $version) : void
		{
		$this->deleteFileTree($version);
		}

	public function deleteDefinitions() : void
		{
		$this->deleteFileTree('/Definition');
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

		$namespacedClass = $this->getUniqueClassName($namespace, $class);

		$this->writeClass($namespacedClass, $apiPath, $properties);
		}

	public function generateDefinition(string $namespacedClass, array $properties) : void
		{
		$parts = \explode('\\', $namespacedClass);
		$class = \array_pop($parts);
		$namespace = \implode('\\', $parts);
		$originalType = '';

		if (! isset($properties['type']))
			{
			echo "{$namespacedClass} has no type";

			if (\str_contains($namespacedClass, 'ResendToNonOpenersInput'))
				{
				echo ', assuming object';
				$properties['type'] = 'object';
				}
			echo "\n";
			}

		$class = \str_replace('_', '', $class);

		if ('object' === $properties['type'])
			{
			$fields = [];
			$readonly = [];
			$minLength = [];
			$maxLength = [];
			$docBlock = [];
			$required = [];
			$dollar = '$';

			foreach ($properties['properties'] ?? [] as $name => $details)
				{
				if ('self' == $name)
					{
					$name = $class;
					}

				if (isset($details['$ref']))
					{
					$docType = $type = $this->getTypeNameFromRef($details['$ref']);
					}
				else
					{
					$type = $details['type'];

					if ('object' == $type)
						{
						$namespace = $this->definitionNamespace;
						$type = $this->getUniqueClassName($this->definitionNamespace, $name);
						$this->generateDefinition($type, $details);
						}

					if (isset($details['format']))
						{
						$type = $details['format'];
						}

					$docType = $type = $this->getPHPType($type);

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
							$type = 'array<' . $itemType . '>';

							if ($details['maxItems'] ?? false)
								{
								$maxLength[$name] = (int)$details['maxItems'];
								}

							if ($details['minItems'] ?? false)
								{
								$minLength[$name] = (int)$details['minItems'];
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

				if (isset($details['required']))
					{
					$required = $details['required'];
					}

				$description = '';

				if (isset($details['description']))
					{
					$description = $this->cleanDescription(\trim($details['description']));
					}

				if (\is_array($type))
					{
					$type = $originalType;
					}
				$type = \str_replace('\\\\', '\\', $type);
				$docBlock[] = \trim("{$type} {$dollar}{$name} {$description}");
				}
			$this->generateFromTemplate($class, ['fields' => $fields, 'maxLength' => $maxLength, 'minLength' => $minLength, 'requiredFields' => $required], $docBlock);
			}
		}

	public function makeClasses(string $version, array $paths) : void
		{
		\ksort($paths);

		foreach ($paths as $path => $properties)
			{
			\ksort($properties);
			$this->generateClass($version, $path, $properties);
			}
		}

	public function makeDefinitions(array $definitions) : void
		{
		foreach ($definitions as $class => $properties)
			{
			$this->generateDefinition($this->getUniqueClassName($this->definitionNamespace, $class), $properties);
			}
		}

	private function cleanDescription(string $description) : string
		{
		// fix issues in documentation
		return \str_replace(
			['(/api_guide/', '<a/>', 'href="/api_guide/', " * \n", '    <li>', '  <ul>', '  </ul>', '  <li>', "\n<li>", "\n<ul>", "\n</ul>"],
			['(https://v3.developer.constantcontact.com/api_guide/', '</a>', 'href="https://v3.developer.constantcontact.com/api_guide/', " *\n",
				' * <li>', ' * <ul>', ' * </ul>', ' * <li>', ' * <li>', ' * <ul>', ' * </ul>'],
			$description
		);
		}

	private function deleteFileTree(string $path) : void
		{
		$directory = __DIR__ . '/../src/ConstantContact' . $path;

		if (! \is_dir($directory))
			{
			\mkdir($directory, 0x077, true);
			}
		$iterator = new \RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator($directory, \RecursiveDirectoryIterator::SKIP_DOTS),
			\RecursiveIteratorIterator::SELF_FIRST
		);

		foreach ($iterator as $item)
			{
			if (! $item->isDir())
				{
				$fileName = "{$item}";

				// don't delete base classes
				if (! \str_ends_with($fileName, 'Base.php'))
					{
					\unlink($fileName);
					}
				}
			}
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
			$blocks[] = \rtrim($block);
			}

		return \implode("\n", $blocks);
		}

	/**
	 * Generate a definition from a template
	 *
	 * @param string $name of the class, no namespace
	 * @param array  $properties from YAML file
	 * @param array  $docBlocks @property docblocks to output
	 */
	private function generateFromTemplate(string $name, array $properties, array $docBlocks) : void
		{
		$namespace = \trim($this->definitionNamespace, '\\');

		$template = <<<PHP
<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace {$namespace};

/**

PHP;

		foreach ($docBlocks as $docBlock)
			{
			$docBlock = \trim($docBlock);
			$template .= " * @property {$docBlock}\n";
			}

		$template .= " */
class ~class~ extends {$this->definitionNamespace}\Base
	{";

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
							if (! \is_numeric($enum))
								{
								$value[$index] = "'{$enum}'";
								}
							}
						unset($enum);
						$value = '[' . \implode(', ', $value) . ']';

						break;

					case 'string':
						$value = "'{$value}'";

						break;

					case 'boolean':
						$value = $value ? 'true' : 'false';

						break;
					}

				if ('string' == \gettype($field))
					{
					$output .= "\t\t'{$field}' => {$value},\n";
					}
				else
					{
					$output .= "\t\t{$value},\n";
					}
				}

			$output .= "\n\t];\n";
			$template .= $output;
			}
			$template = \str_replace('~class~', $name, $template) . "\t}\n";
			$template = \str_replace("/**{$this->nl} */{$this->nl}", '', $template);

			$path = __DIR__ . "/../src/ConstantContact/Definition/{$name}.php";

			if (! \file_put_contents($path, $template))
				{
				throw new \Exception("Error writing file {$path}");
				}
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

	private function getPHPType(string $type) : string
		{
		if ('number' == $type || \str_starts_with($type, 'int'))
			{
			$type = 'int';
			}
		elseif ('date-time' == $type)
			{
			$type = '\PHPFUI\ConstantContact\DateTime';
			}
		elseif ('date' == $type)
			{
			$type = '\PHPFUI\ConstantContact\Date';
			}
		elseif ('boolean' == $type)
			{
			$type = 'bool';
			}
		elseif ('double' == $type)
			{
			$type = 'float';
			}
		elseif ('file' == $type)
			{
			$type = 'string';
			}
		elseif ('uuid' == $type)
			{
			$type = '\PHPFUI\ConstantContact\UUID';
			}

		return $type;
		}

	private function getTypeNameFromRef(string $ref) : string
		{
		$parts = \explode('/', \str_replace('_', '', $ref));

		return $this->getUniqueClassName($this->definitionNamespace, \array_pop($parts));
		}

	/**
	 * Given a namespace and a class in the namespace, get a unique name that combines duplicate classes
	 *
	 * @return string fully namespaced class name
	 */
	private function getUniqueClassName(string $namespace, string $class) : string
		{
		$namespace = \trim($namespace, '\\');
		$class = $this->getClassName($class);

		if (isset($this->duplicateClasses[$class]))
			{
			$class = $this->duplicateClasses[$class];
			$fullName = '\\' . $namespace . '\\' . $class;
			$this->generatedClasses[$fullName] = true;

			return $fullName;
			}

		$fullName = '\\' . $namespace . '\\' . $class;

		// if we have seen this class before, then it is the plural version and it should be singular because CC does not know how to design an API (among other things).
		if (! \str_contains($fullName, 'Definition') && isset($this->generatedClasses[$fullName]))
			{
			if (\str_ends_with($class, 'ies'))
				{
				$class = \substr($class, 0, \strlen($class) - 3);
				$class .= 'y';
				}
			else // trim the s off the end point for the singular
				{
				$class = \substr($class, 0, \strlen($class) - 1);
				}
			$fullName = '\\' . $namespace . '\\' . $class;
			}

		$this->generatedClasses[$fullName] = true;

		return $fullName;
		}

	private function writeClass(string $namespacedClass, string $apiPath, array $properties) : void
		{
		$parts = \explode('\\', $namespacedClass);
		$class = \array_pop($parts);
		$namespace = \trim(\implode('\\', $parts), '\\');

		$methods = '';
		$dollar = '$';

		foreach ($properties as $method => $specs)
			{
			$ucMethod = \ucfirst($method);
			$enums = [];
			$csv = [];
			$parameters = [];
			$docblock = '';

			foreach ($specs['parameters'] ?? [] as $parameter)
				{
				if (isset($parameter['schema']))
					{
					$type = $this->getTypeNameFromRef($parameter['schema']['$ref']);
					}
				else
					{
					$type = $this->getPHPType($parameter['type'] ?? '');
					}
				$name = \str_replace(' ', '_', $parameter['name'] ?? '');

				if (isset($parameter['enum']))
					{
					$enums[$name] = $parameter['enum'];
					}

				if (isset($parameter['format']) && 'csv' == $parameter['format'])
					{
					$csv[$name] = true;
					}

				$description = $parameter['description'] ?? '';
				$docblock .= "\n\t * @param {$type} {$dollar}{$name} {$description}";
				$required = $parameter['required'] ?? false;
				$parameterString = $required ? '' : '?';
				$parameterString .= $type . ' $' . $name;

				if (! $required)
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
METHOD;
			$methodBody .= "\t\t}";
			$code = '';

			foreach ($enums as $name => $values)
				{
				$array = "['" . \implode("', '", $values) . "']";
				$var = '$' . $name;

				if (isset($csv[$name]))
					{
					$code .= <<<CODE

		if (null !== {$var})
			{
			{$dollar}parts = \\explode(',', {$var});
			{$dollar}validValues = {$array};

			foreach ({$dollar}parts as {$dollar}part)
				{
				if (! \\in_array(\\trim({$dollar}part), {$dollar}validValues))
					{
					throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter {$name} containing value '{{$dollar}part}' is not one of (" . \implode(', ', {$dollar}validValues) . ') in ' . __METHOD__);
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

			if (! \\in_array({$var}, {$dollar}validValues))
				{
				throw new \PHPFUI\ConstantContact\Exception\InvalidValue("Parameter {$name} with value '{{$var}}' is not one of (" . \implode(', ', {$dollar}validValues) . ') in ' . __METHOD__);
				}
			}

CODE;
					}
				}

			$parameterArray = '[';

			foreach ($parameters as $name => $definition)
				{
				$getData = \str_contains($definition, '\\Definition\\') ? '->getData()' : '';
				$parameterArray .= "'{$name}' => {$dollar}{$name}{$getData}, ";
				}
			$parameterArray .= ']';
			$code .= <<<ACTION

		return {$dollar}this->do{$ucMethod}({$parameterArray});
ACTION;

			$code .= "\n";
			$summary = $this->formatDescription($specs['summary']);
			$description = $this->formatDescription($specs['description']);
			$methods .= \str_replace(
				['~method~', '~parameters~', '~docblock~', '~summary~', '~description~', '~code~', '~returnType~'],
				[$method, \implode(', ', $parameters), $docblock, $summary, $description, $code, 'delete' != $method ? 'array' : 'bool'],
				$methodBody
			);
			$methods .= "\n";
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
PHP;

		$php .= "\t}\n";
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
	}
