<?php
/**
 * VolunteerHours Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:45
 */
namespace RescueGroups\Tests\Requests\Objects\VolunteerHours\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\VolunteerHours\Search();

        
        $query->setId("id");
        $query->setVolunteerID("volunteerID");
        $query->setVolunteerDate("volunteerDate");
        $query->setCreatedDate("createdDate");
        $query->setVolunteerLength("volunteerLength");
        $query->setVolunteerTask("volunteerTask");
        $query->setVolunteerType("volunteerType");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("volunteerHours", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("id", $data["volunteerHoursID"]);
        $this->assertEquals("volunteerID", $data["volunteerHoursVolunteerID"]);
        $this->assertEquals("volunteerDate", $data["volunteerHoursVolunteerDate"]);
        $this->assertEquals("createdDate", $data["volunteerHoursCreatedDate"]);
        $this->assertEquals("volunteerLength", $data["volunteerHoursVolunteerLength"]);
        $this->assertEquals("volunteerTask", $data["volunteerHoursVolunteerTask"]);
        $this->assertEquals("volunteerType", $data["volunteerType"]);
    }
}