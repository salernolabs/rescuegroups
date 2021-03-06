<?php
/**
 * AnimalsMeetRequests edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsMeetRequests;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsMeetRequests\Edit();

        $testObject = new \RescueGroups\Objects\AnimalsMeetRequest();
        $testObject->id = 'testValue Meet Request ID';
        $testObject->animalId = 'testValue Animal ID';
        $testObject->contactId = 'testValue Contact ID';
        $testObject->eventId = 'testValue Event ID';
        $testObject->locationId = 'testValue Location ID';
        $testObject->date = 'testValue Date';

        $query->updateAnimalsMeetRequest($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsMeetrequests', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Meet Request ID', $data['values'][0]['meetrequestID']);
        $this->assertEquals('testValue Animal ID', $data['values'][0]['meetrequestAnimalID']);
        $this->assertEquals('testValue Contact ID', $data['values'][0]['meetrequestContactID']);
        $this->assertEquals('testValue Event ID', $data['values'][0]['meetrequestEventID']);
        $this->assertEquals('testValue Location ID', $data['values'][0]['meetrequestLocationID']);
        $this->assertEquals('testValue Date', $data['values'][0]['meetrequestDate']);
    }
}