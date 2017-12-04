<?php
/**
 * Eventanimalattendance Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Eventanimalattendance\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Eventanimalattendance\Search();

        
        $query->setAttendanceID("attendanceID");
        $query->setAttendanceStatus("attendanceStatus");
        $query->setAttendanceAnimalID("attendanceAnimalID");
        $query->setAttendanceEventID("attendanceEventID");
        $query->setAnimalName("animalName");
        $query->setAnimalOrgID("animalOrgID");
        $query->setAnimalStatus("animalStatus");
        $query->setEventName("eventName");
        $query->setEventStart("eventStart");
        $query->setEventEnd("eventEnd");
        $query->setEventUrl("eventUrl");
        $query->setEventDescription("eventDescription");
        $query->setEventLocationID("eventLocationID");
        $query->setEventAnimalAttendance("eventAnimalAttendance");
        $query->setEventMeetrequests("eventMeetrequests");
        $query->setEventSpecies("eventSpecies");
        $query->setEventLocationName("eventLocationName");
        $query->setEventLocationUrl("eventLocationUrl");
        $query->setEventLocationAddress("eventLocationAddress");
        $query->setEventLocationCity("eventLocationCity");
        $query->setEventLocationState("eventLocationState");
        $query->setEventLocationPostalcode("eventLocationPostalcode");
        $query->setEventLocationCountry("eventLocationCountry");
        $query->setEventLocationPhone("eventLocationPhone");
        $query->setEventLocationPhoneExt("eventLocationPhoneExt");
        $query->setEventLocationAnimals("eventLocationAnimals");
        $query->setEventLocationEvents("eventLocationEvents");
        $query->setEventLocationColonies("eventLocationColonies");
        $query->setEventLocationMeetrequests("eventLocationMeetrequests");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("eventanimalattendance", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("attendanceID", $data["attendanceID"]);
        $this->assertEquals("attendanceStatus", $data["attendanceStatus"]);
        $this->assertEquals("attendanceAnimalID", $data["attendanceAnimalID"]);
        $this->assertEquals("attendanceEventID", $data["attendanceEventID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalOrgID", $data["animalOrgID"]);
        $this->assertEquals("animalStatus", $data["animalStatus"]);
        $this->assertEquals("eventName", $data["eventName"]);
        $this->assertEquals("eventStart", $data["eventStart"]);
        $this->assertEquals("eventEnd", $data["eventEnd"]);
        $this->assertEquals("eventUrl", $data["eventUrl"]);
        $this->assertEquals("eventDescription", $data["eventDescription"]);
        $this->assertEquals("eventLocationID", $data["eventLocationID"]);
        $this->assertEquals("eventAnimalAttendance", $data["eventAnimalAttendance"]);
        $this->assertEquals("eventMeetrequests", $data["eventMeetrequests"]);
        $this->assertEquals("eventSpecies", $data["eventSpecies"]);
        $this->assertEquals("eventLocationName", $data["eventLocationName"]);
        $this->assertEquals("eventLocationUrl", $data["eventLocationUrl"]);
        $this->assertEquals("eventLocationAddress", $data["eventLocationAddress"]);
        $this->assertEquals("eventLocationCity", $data["eventLocationCity"]);
        $this->assertEquals("eventLocationState", $data["eventLocationState"]);
        $this->assertEquals("eventLocationPostalcode", $data["eventLocationPostalcode"]);
        $this->assertEquals("eventLocationCountry", $data["eventLocationCountry"]);
        $this->assertEquals("eventLocationPhone", $data["eventLocationPhone"]);
        $this->assertEquals("eventLocationPhoneExt", $data["eventLocationPhoneExt"]);
        $this->assertEquals("eventLocationAnimals", $data["eventLocationAnimals"]);
        $this->assertEquals("eventLocationEvents", $data["eventLocationEvents"]);
        $this->assertEquals("eventLocationColonies", $data["eventLocationColonies"]);
        $this->assertEquals("eventLocationMeetrequests", $data["eventLocationMeetrequests"]);
    }
}