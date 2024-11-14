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
		$client = new \PHPFUI\ConstantContact\Client('clientAPIKey', 'clientSecret', 'redirectURI');
		$callable = [GrahamCampbell\GuzzleFactory\GuzzleFactory::class, 'make'];
		$client->setGuzzleFactory($callable);
		$this->assertEquals($callable, $client->getGuzzleFactory());
		$client->setGuzzleFactory(null);
		$guzzle = $client->getGuzzleClient('body', ['header1' => 'HEADER1']);
		$this->assertTrue($guzzle instanceof \GuzzleHttp\Client);
		$config = $guzzle->getConfig('body');
		$this->assertEquals('body', $config);
		$config = $guzzle->getConfig('headers');
		$this->assertIsArray($config);
		$this->assertArrayHasKey('header1', $config);
		$this->assertContains('HEADER1', $config);
		$this->assertArrayHasKey('Cache-Control', $config);
		$client->setGuzzleFactory($callable);
		$guzzle = $client->getGuzzleClient('body2', ['header2' => 'HEADER2']);
		$this->assertTrue($guzzle instanceof \GuzzleHttp\Client);
		$config = $guzzle->getConfig('body');
		$this->assertEquals('body2', $config);
		$config = $guzzle->getConfig('headers');
		$this->assertIsArray($config);
		$this->assertArrayHasKey('header2', $config);
		$this->assertContains('HEADER2', $config);
		$this->assertArrayHasKey('Cache-Control', $config);
		}
	}
