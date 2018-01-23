<?php
/**
 * EventAnimalAttendance add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\EventAnimalAttendance;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\Add();

        $testObject = new \RescueGroups\Objects\EventAnimalAttendance();
        $testObject->status = 'testValue Status';
        $testObject->eventId = 'testValue Event';

        $query->addEventAnimalAttendance($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('eventanimalattendance', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Status', $data['values'][0]['attendanceStatus']);
        $this->assertEquals('testValue Event', $data['values'][0]['attendanceEventID']);
    }
}