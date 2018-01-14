<?php
/**
 * VolunteerHours edit Request Test
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

        $testObject = new \RescueGroups\Objects\VolunteerHour();
        $testObject->id = 'testValue ID';
        $testObject->volunteerID = 'testValue Volunteer';
        $testObject->volunteerDate = 'testValue Date';
        $testObject->volunteerLength = 'testValue Hours';
        $testObject->volunteerTask = 'testValue Task';

        $query->updateVolunteerHour($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('volunteerHours', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['volunteerHoursID']);
        $this->assertEquals('testValue Volunteer', $data['values'][0]['volunteerHoursVolunteerID']);
        $this->assertEquals('testValue Date', $data['values'][0]['volunteerHoursVolunteerDate']);
        $this->assertEquals('testValue Hours', $data['values'][0]['volunteerHoursVolunteerLength']);
        $this->assertEquals('testValue Task', $data['values'][0]['volunteerHoursVolunteerTask']);
    }
}