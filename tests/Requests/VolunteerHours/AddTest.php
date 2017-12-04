<?php
/**
 * VolunteerHours Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\VolunteerHours\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\VolunteerHours\Add();

        
        $query->setVolunteerHoursVolunteerID("volunteerHoursVolunteerID");
        $query->setVolunteerHoursVolunteerDate("volunteerHoursVolunteerDate");
        $query->setVolunteerHoursVolunteerLength("volunteerHoursVolunteerLength");
        $query->setVolunteerHoursVolunteerTask("volunteerHoursVolunteerTask");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("volunteerHours", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("volunteerHoursVolunteerID", $data["volunteerHoursVolunteerID"]);
        $this->assertEquals("volunteerHoursVolunteerDate", $data["volunteerHoursVolunteerDate"]);
        $this->assertEquals("volunteerHoursVolunteerLength", $data["volunteerHoursVolunteerLength"]);
        $this->assertEquals("volunteerHoursVolunteerTask", $data["volunteerHoursVolunteerTask"]);
    }
}