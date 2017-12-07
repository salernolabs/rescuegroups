<?php
/**
 * EventAnimalAttendance Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:21
 */
namespace RescueGroups\Tests\Requests\Objects\EventAnimalAttendance\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\EventAnimalAttendance\Delete();

        
        $query->setAttendanceID("attendanceID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("eventanimalattendance", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("attendanceID", $data["attendanceID"]);
    }
}