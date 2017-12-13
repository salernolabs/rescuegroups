<?php
/**
 * AnimalsMeetRequest Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsMeetRequests\Add;

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

        
        $query->setMeetrequestAnimalID("meetrequestAnimalID");
        $query->setMeetrequestContactID("meetrequestContactID");
        $query->setMeetrequestEventID("meetrequestEventID");
        $query->setMeetrequestLocationID("meetrequestLocationID");
        $query->setMeetrequestDate("meetrequestDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsMeetrequest", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("meetrequestAnimalID", $data["meetrequestAnimalID"]);
        $this->assertEquals("meetrequestContactID", $data["meetrequestContactID"]);
        $this->assertEquals("meetrequestEventID", $data["meetrequestEventID"]);
        $this->assertEquals("meetrequestLocationID", $data["meetrequestLocationID"]);
        $this->assertEquals("meetrequestDate", $data["meetrequestDate"]);
    }
}