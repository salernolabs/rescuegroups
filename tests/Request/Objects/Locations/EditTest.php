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
        $testObject->locationID = 'testValue ID';
        $testObject->locationName = 'testValue Name';
        $testObject->locationUrl = 'testValue Web address';
        $testObject->locationAddress = 'testValue Street address';
        $testObject->locationCity = 'testValue City';
        $testObject->tate = 'testValue State/Province';
        $testObject->locationPostalcode = 'testValue Postal Code';
        $testObject->locationCountry = 'testValue Country';
        $testObject->locationPhone = 'testValue Phone';
        $testObject->locationPhoneExt = 'testValue Phone extension';

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