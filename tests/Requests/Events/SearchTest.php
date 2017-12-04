<?php
/**
 * Events Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Events\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Events\Search();

        
        $query->setEventID("eventID");
        $query->setEventName("eventName");
        $query->setEventStart("eventStart");
        $query->setEventEnd("eventEnd");
        $query->setEventUrl("eventUrl");
        $query->setEventDescription("eventDescription");
        $query->setEventLocationID("eventLocationID");
        $query->setEventAnimalAttendance("eventAnimalAttendance");
        $query->setEventMeetrequests("eventMeetrequests");
        $query->setEventSpecies("eventSpecies");
        $query->setLocationID("locationID");
        $query->setLocationName("locationName");
        $query->setLocationUrl("locationUrl");
        $query->setLocationAddress("locationAddress");
        $query->setLocationCity("locationCity");
        $query->setLocationState("locationState");
        $query->setLocationPostalcode("locationPostalcode");
        $query->setLocationCountry("locationCountry");
        $query->setLocationPhone("locationPhone");
        $query->setLocationPhoneExt("locationPhoneExt");
        $query->setLocationAnimals("locationAnimals");
        $query->setLocationEvents("locationEvents");
        $query->setLocationColonies("locationColonies");
        $query->setLocationMeetrequests("locationMeetrequests");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("events", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("eventID", $data["eventID"]);
        $this->assertEquals("eventName", $data["eventName"]);
        $this->assertEquals("eventStart", $data["eventStart"]);
        $this->assertEquals("eventEnd", $data["eventEnd"]);
        $this->assertEquals("eventUrl", $data["eventUrl"]);
        $this->assertEquals("eventDescription", $data["eventDescription"]);
        $this->assertEquals("eventLocationID", $data["eventLocationID"]);
        $this->assertEquals("eventAnimalAttendance", $data["eventAnimalAttendance"]);
        $this->assertEquals("eventMeetrequests", $data["eventMeetrequests"]);
        $this->assertEquals("eventSpecies", $data["eventSpecies"]);
        $this->assertEquals("locationID", $data["locationID"]);
        $this->assertEquals("locationName", $data["locationName"]);
        $this->assertEquals("locationUrl", $data["locationUrl"]);
        $this->assertEquals("locationAddress", $data["locationAddress"]);
        $this->assertEquals("locationCity", $data["locationCity"]);
        $this->assertEquals("locationState", $data["locationState"]);
        $this->assertEquals("locationPostalcode", $data["locationPostalcode"]);
        $this->assertEquals("locationCountry", $data["locationCountry"]);
        $this->assertEquals("locationPhone", $data["locationPhone"]);
        $this->assertEquals("locationPhoneExt", $data["locationPhoneExt"]);
        $this->assertEquals("locationAnimals", $data["locationAnimals"]);
        $this->assertEquals("locationEvents", $data["locationEvents"]);
        $this->assertEquals("locationColonies", $data["locationColonies"]);
        $this->assertEquals("locationMeetrequests", $data["locationMeetrequests"]);
    }
}