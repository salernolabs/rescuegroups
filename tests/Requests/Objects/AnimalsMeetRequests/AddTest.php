<?php
/**
 * AnimalsMeetRequests Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:35
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsMeetRequests\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsMeetRequests\Add();

        
        $query->setMeetrequestAnimalID("meetrequestAnimalID");
        $query->setMeetrequestContactID("meetrequestContactID");
        $query->setMeetrequestEventID("meetrequestEventID");
        $query->setMeetrequestLocationID("meetrequestLocationID");
        $query->setMeetrequestDate("meetrequestDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsMeetrequests", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("meetrequestAnimalID", $data["meetrequestAnimalID"]);
        $this->assertEquals("meetrequestContactID", $data["meetrequestContactID"]);
        $this->assertEquals("meetrequestEventID", $data["meetrequestEventID"]);
        $this->assertEquals("meetrequestLocationID", $data["meetrequestLocationID"]);
        $this->assertEquals("meetrequestDate", $data["meetrequestDate"]);
    }
}