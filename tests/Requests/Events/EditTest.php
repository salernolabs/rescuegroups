<?php
/**
 * Events Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Events\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Events\Edit();

        
        $query->setEventID("eventID");
        $query->setEventName("eventName");
        $query->setEventStart("eventStart");
        $query->setEventEnd("eventEnd");
        $query->setEventUrl("eventUrl");
        $query->setEventDescription("eventDescription");
        $query->setEventLocationID("eventLocationID");
        $query->setEventSpecies("eventSpecies");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("events", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("eventID", $data["eventID"]);
        $this->assertEquals("eventName", $data["eventName"]);
        $this->assertEquals("eventStart", $data["eventStart"]);
        $this->assertEquals("eventEnd", $data["eventEnd"]);
        $this->assertEquals("eventUrl", $data["eventUrl"]);
        $this->assertEquals("eventDescription", $data["eventDescription"]);
        $this->assertEquals("eventLocationID", $data["eventLocationID"]);
        $this->assertEquals("eventSpecies", $data["eventSpecies"]);
    }
}