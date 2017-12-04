<?php
/**
 * Eventanimalattendance Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Eventanimalattendance\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Eventanimalattendance\Add();

        
        $query->setAttendanceAnimalID("attendanceAnimalID");
        $query->setAttendanceStatus("attendanceStatus");
        $query->setAttendanceEventID("attendanceEventID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("eventanimalattendance", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("attendanceAnimalID", $data["attendanceAnimalID"]);
        $this->assertEquals("attendanceStatus", $data["attendanceStatus"]);
        $this->assertEquals("attendanceEventID", $data["attendanceEventID"]);
    }
}