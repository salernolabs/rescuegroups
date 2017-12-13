<?php
/**
 * Events PublicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Events;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Events\PublicSearch();

        
        $query->setEventID("eventID");
        $query->setEventOrgID("eventOrgID");
        $query->setEventName("eventName");
        $query->setEventStart("eventStart");
        $query->setEventEnd("eventEnd");
        $query->setEventUrl("eventUrl");
        $query->setEventDescription("eventDescription");
        $query->setEventLocationID("eventLocationID");
        $query->setEventSpecies("eventSpecies");
        $query->setLocationName("locationName");
        $query->setLocationUrl("locationUrl");
        $query->setLocationAddress("locationAddress");
        $query->setLocationCity("locationCity");
        $query->setLocationState("locationState");
        $query->setLocationPostalcode("locationPostalcode");
        $query->setLocationCountry("locationCountry");
        $query->setLocationPhone("locationPhone");
        $query->setLocationPhoneExt("locationPhoneExt");
        $query->setLocationEvents("locationEvents");
        $query->setLocationDistance("locationDistance");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("events", $data["objectType"]);

        $this->assertEquals("publicSearch", $data["objectAction"]);

        $this->assertEquals("eventID", $data["eventID"]);
        $this->assertEquals("eventOrgID", $data["eventOrgID"]);
        $this->assertEquals("eventName", $data["eventName"]);
        $this->assertEquals("eventStart", $data["eventStart"]);
        $this->assertEquals("eventEnd", $data["eventEnd"]);
        $this->assertEquals("eventUrl", $data["eventUrl"]);
        $this->assertEquals("eventDescription", $data["eventDescription"]);
        $this->assertEquals("eventLocationID", $data["eventLocationID"]);
        $this->assertEquals("eventSpecies", $data["eventSpecies"]);
        $this->assertEquals("locationName", $data["locationName"]);
        $this->assertEquals("locationUrl", $data["locationUrl"]);
        $this->assertEquals("locationAddress", $data["locationAddress"]);
        $this->assertEquals("locationCity", $data["locationCity"]);
        $this->assertEquals("locationState", $data["locationState"]);
        $this->assertEquals("locationPostalcode", $data["locationPostalcode"]);
        $this->assertEquals("locationCountry", $data["locationCountry"]);
        $this->assertEquals("locationPhone", $data["locationPhone"]);
        $this->assertEquals("locationPhoneExt", $data["locationPhoneExt"]);
        $this->assertEquals("locationEvents", $data["locationEvents"]);
        $this->assertEquals("locationDistance", $data["locationDistance"]);
    }
}