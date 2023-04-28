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
class CustomFieldTest extends \PHPUnit\Framework\TestCase
	{
	public function testBadArrayType() : void
		{
		$fixture = new \Tests\Fixtures\CustomField();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->cf_array = [];
		}

	public function testBadBooleanType() : void
		{
		$fixture = new \Tests\Fixtures\CustomField();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->cf_boolean = true;
		}

	public function testBadFloatType() : void
		{
		$fixture = new \Tests\Fixtures\CustomField();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->cf_float = 1.234;
		}

	public function testBadIntType() : void
		{
		$fixture = new \Tests\Fixtures\CustomField();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->cf_integer = 0;
		}

	public function testGetSet() : void
		{
		$string = 'A long string';
		$fixture = new \Tests\Fixtures\CustomField();
		$fixture->cf_string = $string;
		$this->assertEquals($string, $fixture->cf_string);
		$this->assertIsString($fixture->cf_string);
		}

	public function testJsonOutput() : void
		{
		$class = new \Tests\Fixtures\CustomField();
		$class->cf_gender = 'mail';
		$class->cf_firstName = 'First';
		$class->cf_lastName = 'Class';

		$json = $class->getJSON();
		$expectedJSON = '{
    "cf:gender": "mail",
    "cf:firstName": "First",
    "cf:lastName": "Class"
}';
		// normalize line endings
		$expectedJSON = \str_replace("\r\n", "\n", $expectedJSON);
		$this->assertEquals($expectedJSON, $json);

		$class = new \Tests\Fixtures\CustomField(['cf_gender' => 'mail', 'cf_firstName' => 'First', 'cf_lastName' => 'Class']);
		$json = $class->getJSON();
		$this->assertEquals($expectedJSON, $json);
		}

	public function testMaxLength() : void
		{
		$fixture = new \Tests\Fixtures\CustomField();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidLength::class);
		$fixture->cf_string = \str_pad('', 300);
		}
	}
