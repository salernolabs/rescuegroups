<?php
/**
 * EventAnimalAttendance edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\EventAnimalAttendance;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\Edit();

        $testObject = new \RescueGroups\Objects\EventAnimalAttendance();
        $testObject->id = 'testValue ID';
        $testObject->animalId = 'testValue Animal';
        $testObject->status = 'testValue Status';
        $testObject->eventId = 'testValue Event';

        $query->updateEventAnimalAttendance($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('eventanimalattendance', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['attendanceID']);
        $this->assertEquals('testValue Animal', $data['values'][0]['attendanceAnimalID']);
        $this->assertEquals('testValue Status', $data['values'][0]['attendanceStatus']);
        $this->assertEquals('testValue Event', $data['values'][0]['attendanceEventID']);
    }
}