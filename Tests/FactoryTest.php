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
class FactoryTest extends \PHPUnit\Framework\TestCase
	{
	public function testSetFactory() : void
		{
		$this->assertNull(\PHPFUI\ConstantContact\Client::getGuzzleFactory());
		$callable = [GrahamCampbell\GuzzleFactory\GuzzleFactory::class, 'make'];
		\PHPFUI\ConstantContact\Client::setGuzzleFactory($callable);
		$this->assertEquals($callable, \PHPFUI\ConstantContact\Client::getGuzzleFactory());
		\PHPFUI\ConstantContact\Client::setGuzzleFactory(null);
		$client = new \PHPFUI\ConstantContact\Client('clientAPIKey', 'clientSecret', 'redirectURI');
		$guzzle = $client->getGuzzleClient('body', ['header1' => 'HEADER1']);
		$this->assertTrue($guzzle instanceof \GuzzleHttp\Client);
		$config = $guzzle->getConfig('body');
		$this->assertEquals('body', $config);
		$config = $guzzle->getConfig('headers');
		$this->assertIsArray($config);
		$this->assertArrayHasKey('header1', $config);
		$this->assertContains('HEADER1', $config);
		$this->assertArrayHasKey('Cache-Control', $config);
		\PHPFUI\ConstantContact\Client::setGuzzleFactory($callable);
		$guzzle = $client->getGuzzleClient('body', ['header1' => 'HEADER1']);
		$this->assertTrue($guzzle instanceof \GuzzleHttp\Client);
		$config = $guzzle->getConfig('body');
		$this->assertEquals('body', $config);
		$config = $guzzle->getConfig('headers');
		$this->assertIsArray($config);
		$this->assertArrayHasKey('header1', $config);
		$this->assertContains('HEADER1', $config);
		$this->assertArrayHasKey('Cache-Control', $config);
		}
	}
