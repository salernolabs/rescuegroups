<?php
/**
 * Locations edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Locations;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Locations\Edit();

        $testObject = new \RescueGroups\Objects\Location();
        $testObject->id = 'testValue ID';
        $testObject->name = 'testValue Name';
        $testObject->url = 'testValue Web address';
        $testObject->address = 'testValue Street address';
        $testObject->city = 'testValue City';
        $testObject->state = 'testValue State/Province';
        $testObject->postalcode = 'testValue Postal Code';
        $testObject->country = 'testValue Country';
        $testObject->phone = 'testValue Phone';
        $testObject->phoneExt = 'testValue Phone extension';

        $query->updateLocation($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('locations', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['locationID']);
        $this->assertEquals('testValue Name', $data['values'][0]['locationName']);
        $this->assertEquals('testValue Web address', $data['values'][0]['locationUrl']);
        $this->assertEquals('testValue Street address', $data['values'][0]['locationAddress']);
        $this->assertEquals('testValue City', $data['values'][0]['locationCity']);
        $this->assertEquals('testValue State/Province', $data['values'][0]['locationState']);
        $this->assertEquals('testValue Postal Code', $data['values'][0]['locationPostalcode']);
        $this->assertEquals('testValue Country', $data['values'][0]['locationCountry']);
        $this->assertEquals('testValue Phone', $data['values'][0]['locationPhone']);
        $this->assertEquals('testValue Phone extension', $data['values'][0]['locationPhoneExt']);
    }
}