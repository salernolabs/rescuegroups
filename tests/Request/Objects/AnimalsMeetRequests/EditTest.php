<?php
/**
 * AnimalsMeetRequest Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsMeetRequests\Edit;

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

        
        $query->setMeetrequestID("meetrequestID");
        $query->setMeetrequestAnimalID("meetrequestAnimalID");
        $query->setMeetrequestContactID("meetrequestContactID");
        $query->setMeetrequestEventID("meetrequestEventID");
        $query->setMeetrequestLocationID("meetrequestLocationID");
        $query->setMeetrequestDate("meetrequestDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsMeetrequest", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("meetrequestID", $data["meetrequestID"]);
        $this->assertEquals("meetrequestAnimalID", $data["meetrequestAnimalID"]);
        $this->assertEquals("meetrequestContactID", $data["meetrequestContactID"]);
        $this->assertEquals("meetrequestEventID", $data["meetrequestEventID"]);
        $this->assertEquals("meetrequestLocationID", $data["meetrequestLocationID"]);
        $this->assertEquals("meetrequestDate", $data["meetrequestDate"]);
    }
}