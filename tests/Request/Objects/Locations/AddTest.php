<?php
/**
 * Locations add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Locations;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Locations\Add();

        $testObject = new \RescueGroups\Objects\Location();
        $testObject->name = 'testValue Name';
        $testObject->url = 'testValue Web address';
        $testObject->address = 'testValue Street address';
        $testObject->city = 'testValue City';
        $testObject->state = 'testValue State/Province';
        $testObject->postalcode = 'testValue Postal Code';
        $testObject->phone = 'testValue Phone';
        $testObject->phoneExt = 'testValue Phone extension';

        $query->addLocation($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('locations', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Name', $data['values'][0]['locationName']);
        $this->assertEquals('testValue Web address', $data['values'][0]['locationUrl']);
        $this->assertEquals('testValue Street address', $data['values'][0]['locationAddress']);
        $this->assertEquals('testValue City', $data['values'][0]['locationCity']);
        $this->assertEquals('testValue State/Province', $data['values'][0]['locationState']);
        $this->assertEquals('testValue Postal Code', $data['values'][0]['locationPostalcode']);
        $this->assertEquals('testValue Phone', $data['values'][0]['locationPhone']);
        $this->assertEquals('testValue Phone extension', $data['values'][0]['locationPhoneExt']);
    }
}