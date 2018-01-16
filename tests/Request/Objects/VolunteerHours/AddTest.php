<?php
/**
 * VolunteerHours add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\VolunteerHours;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\VolunteerHours\Add();

        $testObject = new \RescueGroups\Objects\VolunteerHour();
        $testObject->volunteerDate = 'testValue Date';
        $testObject->volunteerLength = 'testValue Hours';
        $testObject->volunteerTask = 'testValue Task';

        $query->addVolunteerHour($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('volunteerHours', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Date', $data['values'][0]['volunteerHoursVolunteerDate']);
        $this->assertEquals('testValue Hours', $data['values'][0]['volunteerHoursVolunteerLength']);
        $this->assertEquals('testValue Task', $data['values'][0]['volunteerHoursVolunteerTask']);
    }
}