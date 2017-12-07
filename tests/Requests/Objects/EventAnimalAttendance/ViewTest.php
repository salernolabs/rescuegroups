<?php
/**
 * EventAnimalAttendance View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:21
 */
namespace RescueGroups\Tests\Requests\Objects\EventAnimalAttendance\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\EventAnimalAttendance\View();

        
        $query->setAttendanceID("attendanceID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("eventanimalattendance", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("attendanceID", $data["attendanceID"]);
    }
}