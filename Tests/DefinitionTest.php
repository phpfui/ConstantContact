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
	public function testBadArrayOfTypeSizeMax() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidLength::class);
		$fixture->classArraySize = [
			new \Tests\Fixtures\ClassTester(),
			new \Tests\Fixtures\ClassTester(),
			new \Tests\Fixtures\ClassTester(),
			new \Tests\Fixtures\ClassTester(),
			new \Tests\Fixtures\ClassTester(),
		];
		}

	public function testBadArrayOfTypeSizeMin() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidLength::class);
		$fixture->classArraySizeMin = [
			new \Tests\Fixtures\ClassTester(),
		];
		}

	public function testBadArrayType() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->array = 0;
		}

	public function testBadArrayTypes() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->classArray = [
			new \Tests\Fixtures\ClassTester(),
			new \Tests\Fixtures\ClassTester(),
			new \Tests\Fixtures\Type(),
		];
		}

	public function testBadBooleanType() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->boolean = 0;
		}

	public function testBadClassType() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->class = new \DateTime();
		}

	public function testClassAssignedInt() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->class = 1;
		}

	public function testClassAssignedString() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->class = 'class';
		}

	public function testBadEnum() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidValue::class);
		$fixture->enum = 'fred';
		}

	public function testBadField() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidField::class);
		$fixture->badField = 'test';
		}

	public function testBadFloatType() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->float = 'abc';
		}

	public function testBadIntType() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->integer = 'test';
		}

	public function testBadStringType() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->string = 123;
		}

	public function testClassArray() : void
		{
		$testClass = new \Tests\Fixtures\ClassTester();
		$original = [
			'classArray' => [$testClass, new \Tests\Fixtures\ClassTester(), ],
		];

		$fixture = new \Tests\Fixtures\Type($original);

		$this->assertIsArray($fixture->classArray);
		$this->assertCount(2, $fixture->classArray);
		}

	public function testClassArraySize() : void
		{
		$testClass = new \Tests\Fixtures\ClassTester();
		$original = [
			'classArraySize' => [$testClass, new \Tests\Fixtures\ClassTester(), ],
		];

		$fixture = new \Tests\Fixtures\Type($original);

		$this->assertIsArray($fixture->classArraySize);
		$this->assertCount(2, $fixture->classArraySize);
		}

	public function testClassArraySizeMin() : void
		{
		$testClass = new \Tests\Fixtures\ClassTester();
		$original = [
			'classArraySizeMin' => [$testClass, new \Tests\Fixtures\ClassTester(), ],
		];

		$fixture = new \Tests\Fixtures\Type($original);

		$this->assertIsArray($fixture->classArraySizeMin);
		$this->assertCount(2, $fixture->classArraySizeMin);
		}

	public function testConstructFromArray() : void
		{
		$original = [
			'boolean' => true,
			'integer' => 10,
			'string' => 'stringLn10',
			'enum' => 'primary_email',
			'array' => ['one' => 1, 'two' => 2, 'three' => 3],
			'float' => 3.1415926,
			'ucEnum' => 'SCHEDULED',
			'intEnum' => 5,
		];

		$fixture = new \Tests\Fixtures\Type($original);
		$this->assertEquals($original, $fixture->getData());
		}

	public function testConstructFromObject() : void
		{
		$testClass = new \Tests\Fixtures\ClassTester();
		$original = [
			'class' => $testClass,
		];
		$fixture = new \Tests\Fixtures\Type($original);

		$this->assertEquals($testClass, $fixture->class);
		}

	public function testGeneratedClass() : void
		{
		$fixture = new \PHPFUI\ConstantContact\Definition\EmailCampaignActivity();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidType::class);
		$fixture->physical_address_in_footer = new \DateTime();
		}

	public function testGetSet() : void
		{
		$fixture = new \Tests\Fixtures\Type();
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

		$array = ['String', '2', 'Another string'];
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

		$class = new \Tests\Fixtures\ClassTester();
		$fixture->class = $class;
		$this->assertEquals($class, $fixture->class);
		$this->assertIsObject($fixture->class);

		$json = $fixture->getJSON();
		$expectedJSON = '{
    "integer": 123,
    "string": "A long string",
    "boolean": true,
    "array": [
        "String",
        "2",
        "Another string"
    ],
    "float": 1.23,
    "enum": "primary_email",
    "intEnum": 1,
    "ucEnum": "REMOVED",
    "class": []
}';
		// normalize line endings
		$expectedJSON = \str_replace("\r\n", "\n", $expectedJSON);
		$this->assertEquals($expectedJSON, $json);
		}

	public function testMaxLength() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidLength::class);
		$fixture->string = \str_pad('', 100);
		}

	public function testMinLength() : void
		{
		$fixture = new \Tests\Fixtures\Type();
		$this->expectException(\PHPFUI\ConstantContact\Exception\InvalidLength::class);
		$fixture->string = 'fred';
		}

	public function testDefaultObjects() : void
		{
		$address = [];
		$address['created_at'] = (string)new \PHPFUI\ConstantContact\DateTime();
		$address['permission_to_send'] = 'explicit';

		$email_address = new \PHPFUI\ConstantContact\Definition\EmailAddressPut($address);
		$contact = ['email_address' => $email_address];

		$contactBody = new \PHPFUI\ConstantContact\Definition\ContactPutRequest($contact);
		$contactBody->update_source = 'Account';
		$contactBody->street_addresses = [new \PHPFUI\ConstantContact\Definition\StreetAddressPut([
			'kind' => 'home',
			'street' => 'address',
			'city' => 'town',
			'state' => 'state',
			'postal_code' => 'zip',
			'country' => 'USA', ])];
		$json = $contactBody->getJSON();

		$this->assertStringContainsString('created_at', $json);
		}
	}
