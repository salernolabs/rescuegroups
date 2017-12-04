<?php
/**
 * VolunteerHours Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\VolunteerHours\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\VolunteerHours\Edit();

        
        $query->setVolunteerHoursID("volunteerHoursID");
        $query->setVolunteerHoursVolunteerID("volunteerHoursVolunteerID");
        $query->setVolunteerHoursVolunteerDate("volunteerHoursVolunteerDate");
        $query->setVolunteerHoursVolunteerLength("volunteerHoursVolunteerLength");
        $query->setVolunteerHoursVolunteerTask("volunteerHoursVolunteerTask");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("volunteerHours", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("volunteerHoursID", $data["volunteerHoursID"]);
        $this->assertEquals("volunteerHoursVolunteerID", $data["volunteerHoursVolunteerID"]);
        $this->assertEquals("volunteerHoursVolunteerDate", $data["volunteerHoursVolunteerDate"]);
        $this->assertEquals("volunteerHoursVolunteerLength", $data["volunteerHoursVolunteerLength"]);
        $this->assertEquals("volunteerHoursVolunteerTask", $data["volunteerHoursVolunteerTask"]);
    }
}