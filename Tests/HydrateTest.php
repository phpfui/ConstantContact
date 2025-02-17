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
class HydrateTest extends \PHPUnit\Framework\TestCase
	{
	public function testHydration() : void
		{
		$json = '{
    "contacts": [
        {
            "contact_id": "d5e4dc88-9dbf-11ef-9af2-fa163e4d7501",
            "email_address": {
                "address": "xxxx@mailinator.com",
                "permission_to_send": "explicit",
                "created_at": "2024-11-08T10:54:32Z",
                "updated_at": "2024-11-08T10:54:32Z",
                "opt_in_source": "Contact",
                "opt_in_date": "2024-11-08T10:54:32Z",
                "confirm_status": "off"
            },
            "first_name": "Petr",
            "last_name": "Pavel",
            "create_source": "Contact",
            "created_at": "2024-11-08T10:54:32Z",
            "updated_at": "2024-11-08T10:54:32Z"
        },
        {
            "contact_id": "d5e4dc88-9dbf-11ef-9af2-fa163e4d7501",
            "email_address": {
                "address": "xxxx@mailinator.com",
                "permission_to_send": "explicit",
                "created_at": "2024-11-08T10:54:32Z",
                "updated_at": "2024-11-08T10:54:32Z",
                "opt_in_source": "Contact",
                "opt_in_date": "2024-11-08T10:54:32Z",
                "confirm_status": "off"
            },
            "first_name": "Petr",
            "last_name": "Pavel",
            "create_source": "Contact",
            "created_at": "2024-11-08T10:54:32Z",
            "updated_at": "2024-11-08T10:54:32Z"
        }
    ]
}';
		$this->assertJson($json);
		$dataArray = \json_decode($json, true);
		$this->assertIsArray($dataArray);
		$this->assertIsArray($dataArray['contacts']);
		$this->assertEquals('Petr', $dataArray['contacts'][0]['first_name']);
		$this->assertEquals('Petr', $dataArray['contacts'][1]['first_name']);
		$this->assertIsArray($dataArray['contacts'][0]['email_address']);
		$this->assertIsArray($dataArray['contacts'][1]['email_address']);
		$this->assertEquals('xxxx@mailinator.com', $dataArray['contacts'][0]['email_address']['address']);
		$this->assertEquals('xxxx@mailinator.com', $dataArray['contacts'][1]['email_address']['address']);
		$contacts = new \PHPFUI\ConstantContact\Definition\Contacts($dataArray);
		$this->assertIsArray($contacts->contacts);
		$this->assertEquals('d5e4dc88-9dbf-11ef-9af2-fa163e4d7501', "{$contacts->contacts[0]->contact_id}");
		$this->assertEquals('xxxx@mailinator.com', $contacts->contacts[0]->email_address->address);
		$this->assertEquals('xxxx@mailinator.com', $contacts->contacts[1]->email_address->address);
		$time = new \PHPFUI\ConstantContact\DateTime('2024-11-08T10:54:32Z');
		$this->assertEquals((string)$time, (string)$contacts->contacts[0]->created_at);
		$this->assertEquals((string)$time, (string)$contacts->contacts[1]->created_at);
		$newJson = $contacts->getJSON();
		$this->assertJson($newJson);
		$newDataArray = $contacts->toArray();
		$this->assertEquals($dataArray, $newDataArray);
		}
	}
