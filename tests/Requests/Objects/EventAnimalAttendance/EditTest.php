<?php
/**
 * EventAnimalAttendance Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:40
 */
namespace RescueGroups\Tests\Requests\Objects\EventAnimalAttendance\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\EventAnimalAttendance\Edit();

        
        $query->setAttendanceID("attendanceID");
        $query->setAttendanceAnimalID("attendanceAnimalID");
        $query->setAttendanceStatus("attendanceStatus");
        $query->setAttendanceEventID("attendanceEventID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("eventanimalattendance", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("attendanceID", $data["attendanceID"]);
        $this->assertEquals("attendanceAnimalID", $data["attendanceAnimalID"]);
        $this->assertEquals("attendanceStatus", $data["attendanceStatus"]);
        $this->assertEquals("attendanceEventID", $data["attendanceEventID"]);
    }
}