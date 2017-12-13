<?php
/**
 * AnimalsMeetRequests Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsMeetRequests;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsMeetRequests\Search();

        
        $query->setMeetrequestID("meetrequestID");
        $query->setMeetrequestAnimalID("meetrequestAnimalID");
        $query->setMeetrequestContactID("meetrequestContactID");
        $query->setMeetrequestEventID("meetrequestEventID");
        $query->setMeetrequestLocationID("meetrequestLocationID");
        $query->setMeetrequestDate("meetrequestDate");
        $query->setAnimalName("animalName");
        $query->setContactName("contactName");
        $query->setContactType("contactType");
        $query->setEventName("eventName");
        $query->setLocationName("locationName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsMeetrequests", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("meetrequestID", $data["meetrequestID"]);
        $this->assertEquals("meetrequestAnimalID", $data["meetrequestAnimalID"]);
        $this->assertEquals("meetrequestContactID", $data["meetrequestContactID"]);
        $this->assertEquals("meetrequestEventID", $data["meetrequestEventID"]);
        $this->assertEquals("meetrequestLocationID", $data["meetrequestLocationID"]);
        $this->assertEquals("meetrequestDate", $data["meetrequestDate"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("contactName", $data["contactName"]);
        $this->assertEquals("contactType", $data["contactType"]);
        $this->assertEquals("eventName", $data["eventName"]);
        $this->assertEquals("locationName", $data["locationName"]);
    }
}