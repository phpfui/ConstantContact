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
	public function testGetSet() : void
		{
		$string = 'A long string';
		$fixture = new \Tests\Fixtures\CustomFieldTest();
		$fixture->cf_string = $string;
		$this->assertEquals($string, $fixture->cf_string);
		$this->assertIsString($fixture->cf_string);
		}

	public function testBadIntType() : void
		{
		$fixture = new \Tests\Fixtures\CustomFieldTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->cf_integer = 0;
		}

	public function testBadFloatType() : void
		{
		$fixture = new \Tests\Fixtures\CustomFieldTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->cf_float = 1.234;
		}

	public function testBadBooleanType() : void
		{
		$fixture = new \Tests\Fixtures\CustomFieldTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->cf_boolean = true;
		}

	public function testBadArrayType() : void
		{
		$fixture = new \Tests\Fixtures\CustomFieldTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->cf_array = [];
		}

	public function testMaxLength() : void
		{
		$fixture = new \Tests\Fixtures\CustomFieldTest();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidLength::class);
		$fixture->cf_string = \str_pad('', 300);
		}

	}
