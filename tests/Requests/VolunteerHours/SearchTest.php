<?php
/**
 * VolunteerHours Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\VolunteerHours\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\VolunteerHours\Search();

        
        $query->setVolunteerHoursID("volunteerHoursID");
        $query->setVolunteerHoursVolunteerID("volunteerHoursVolunteerID");
        $query->setVolunteerHoursVolunteerDate("volunteerHoursVolunteerDate");
        $query->setVolunteerHoursCreatedDate("volunteerHoursCreatedDate");
        $query->setVolunteerHoursVolunteerLength("volunteerHoursVolunteerLength");
        $query->setVolunteerHoursVolunteerTask("volunteerHoursVolunteerTask");
        $query->setVolunteerType("volunteerType");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("volunteerHours", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("volunteerHoursID", $data["volunteerHoursID"]);
        $this->assertEquals("volunteerHoursVolunteerID", $data["volunteerHoursVolunteerID"]);
        $this->assertEquals("volunteerHoursVolunteerDate", $data["volunteerHoursVolunteerDate"]);
        $this->assertEquals("volunteerHoursCreatedDate", $data["volunteerHoursCreatedDate"]);
        $this->assertEquals("volunteerHoursVolunteerLength", $data["volunteerHoursVolunteerLength"]);
        $this->assertEquals("volunteerHoursVolunteerTask", $data["volunteerHoursVolunteerTask"]);
        $this->assertEquals("volunteerType", $data["volunteerType"]);
    }
}