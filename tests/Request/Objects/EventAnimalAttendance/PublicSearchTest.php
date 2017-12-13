<?php
/**
 * EventAnimalAttendance PublicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\EventAnimalAttendance\PublicSearch;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\PublicSearch();

        
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
        $query->setEventLocationName("eventLocationName");
        $query->setEventLocationUrl("eventLocationUrl");
        $query->setEventLocationAddress("eventLocationAddress");
        $query->setEventLocationCity("eventLocationCity");
        $query->setEventLocationState("eventLocationState");
        $query->setEventLocationPostalcode("eventLocationPostalcode");
        $query->setEventLocationCountry("eventLocationCountry");
        $query->setEventLocationPhone("eventLocationPhone");
        $query->setEventLocationPhoneExt("eventLocationPhoneExt");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("eventanimalattendance", $data["objectType"]);

        $this->assertEquals("publicSearch", $data["objectAction"]);

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
        $this->assertEquals("eventLocationName", $data["eventLocationName"]);
        $this->assertEquals("eventLocationUrl", $data["eventLocationUrl"]);
        $this->assertEquals("eventLocationAddress", $data["eventLocationAddress"]);
        $this->assertEquals("eventLocationCity", $data["eventLocationCity"]);
        $this->assertEquals("eventLocationState", $data["eventLocationState"]);
        $this->assertEquals("eventLocationPostalcode", $data["eventLocationPostalcode"]);
        $this->assertEquals("eventLocationCountry", $data["eventLocationCountry"]);
        $this->assertEquals("eventLocationPhone", $data["eventLocationPhone"]);
        $this->assertEquals("eventLocationPhoneExt", $data["eventLocationPhoneExt"]);
    }
}