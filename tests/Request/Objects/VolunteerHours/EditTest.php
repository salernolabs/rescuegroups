<?php
/**
 * VolunteerHours Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\VolunteerHours;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\VolunteerHours\Edit();

        
        $query->setId("id");
        $query->setVolunteerID("volunteerID");
        $query->setVolunteerDate("volunteerDate");
        $query->setVolunteerLength("volunteerLength");
        $query->setVolunteerTask("volunteerTask");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("volunteerHours", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("id", $data["volunteerHoursID"]);
        $this->assertEquals("volunteerID", $data["volunteerHoursVolunteerID"]);
        $this->assertEquals("volunteerDate", $data["volunteerHoursVolunteerDate"]);
        $this->assertEquals("volunteerLength", $data["volunteerHoursVolunteerLength"]);
        $this->assertEquals("volunteerTask", $data["volunteerHoursVolunteerTask"]);
    }
}