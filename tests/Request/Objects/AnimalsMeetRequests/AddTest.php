<?php
/**
 * AnimalsMeetRequests add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsMeetRequests;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsMeetRequests\Add();

        $testObject = new \RescueGroups\Objects\AnimalsMeetRequest();
        $testObject->contactId = 'testValue Contact ID';
        $testObject->eventId = 'testValue Event ID';
        $testObject->locationId = 'testValue Location ID';
        $testObject->date = 'testValue Date';

        $query->addAnimalsMeetRequest($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsMeetrequests', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Contact ID', $data['values'][0]['meetrequestContactID']);
        $this->assertEquals('testValue Event ID', $data['values'][0]['meetrequestEventID']);
        $this->assertEquals('testValue Location ID', $data['values'][0]['meetrequestLocationID']);
        $this->assertEquals('testValue Date', $data['values'][0]['meetrequestDate']);
    }
}