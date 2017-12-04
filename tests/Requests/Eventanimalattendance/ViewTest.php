<?php
/**
 * Eventanimalattendance View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Eventanimalattendance\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Eventanimalattendance\View();

        
        $query->setAttendanceID("attendanceID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("eventanimalattendance", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("attendanceID", $data["attendanceID"]);
    }
}