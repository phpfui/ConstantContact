<?php

/**
 * This file is part of the PHPFUI\ConstantContact package
 *
 * (c) Bruce Wells
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source
 * code
 */
class DefinitionTest extends \PHPUnit\Framework\TestCase
	{

	public function testGetSet() : void
		{
		$fixture = new \Tests\Fixtures\TypeTest();
		$integer = 123;
		$fixture->integer = $integer;
		$this->assertEquals($integer, $fixture->integer);
		$this->assertIsInt($fixture->integer);

		$string = 'A long string';
		$fixture->string = $string;
		$this->assertEquals($string, $fixture->string);
		$this->assertIsString($fixture->string);

		$boolean = true;
		$fixture->boolean = $boolean;
		$this->assertEquals($boolean, $fixture->boolean);
		$this->assertIsBool($fixture->boolean);

		$array = [1, 2, 3];
		$fixture->array = $array;
		$this->assertEquals($array, $fixture->array);
		$this->assertIsArray($fixture->array);

		$float = 1.23;
		$fixture->float = $float;
		$this->assertEquals($float, $fixture->float);
		$this->assertIsFloat($fixture->float);

		$string = 'primary_email';
		$fixture->enum = $string;
		$this->assertEquals($string, $fixture->enum);
		$this->assertIsString($fixture->enum);

		$integer = 1;
		$fixture->intEnum = $integer;
		$this->assertEquals($integer, $fixture->intEnum);
		$this->assertIsInt($fixture->intEnum);

		$string = 'REMOVED';
		$fixture->ucEnum = $string;
		$this->assertEquals($string, $fixture->ucEnum);
		$this->assertIsString($fixture->ucEnum);

		$class = new \Tests\Fixtures\ClassTest();
		$fixture->class = $class;
		$this->assertEquals($class, $fixture->class);
		$this->assertIsObject($fixture->class);

		$json = $fixture->getJSON();
		$expectedJSON ='{
    "class": {},
    "integer": 123,
    "string": "A long string",
    "boolean": true,
    "array": [
        1,
        2,
        3
    ],
    "float": 1.23,
    "enum": "primary_email",
    "intEnum": 1,
    "ucEnum": "REMOVED"
}';
		// normalize line endings
		$expectedJSON = str_replace("\r\n", "\n", $expectedJSON);
		$this->assertEquals($expectedJSON, $json);
		}

	public function testBadField() : void
		{
		$fixture = new \Tests\Fixtures\TypeTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidField::class);
		$fixture->badField = 'test';
		}

	public function testBadIntType() : void
		{
		$fixture = new \Tests\Fixtures\TypeTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->integer = 'test';
		}

	public function testBadStringType() : void
		{
		$fixture = new \Tests\Fixtures\TypeTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->string = 123;
		}

	public function testBadFloatType() : void
		{
		$fixture = new \Tests\Fixtures\TypeTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->float = 'abc';
		}

	public function testBadBooleanType() : void
		{
		$fixture = new \Tests\Fixtures\TypeTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->boolean = 0;
		}

	public function testBadArrayType() : void
		{
		$fixture = new \Tests\Fixtures\TypeTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->array = 0;
		}

	public function testBadClassType() : void
		{
		$fixture = new \Tests\Fixtures\TypeTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->class = new \DateTime();
		}

	public function testBadEnum() : void
		{
		$fixture = new \Tests\Fixtures\TypeTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidValue::class);
		$fixture->enum = 'fred';
		}

	public function testMinLength() : void
		{
		$fixture = new \Tests\Fixtures\TypeTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidLength::class);
		$fixture->string = 'fred';
		}

	public function testMaxLength() : void
		{
		$fixture = new \Tests\Fixtures\TypeTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidLength::class);
		$fixture->string = str_pad('', 100);
		}

	public function testGeneratedClass() : void
		{
		$fixture = new \PHPFUI\ConstantContact\Definition\EmailCampaignActivity();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->physical_address_in_footer = new \DateTime();
		}

	}
