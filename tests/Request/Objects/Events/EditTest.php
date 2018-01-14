<?php
/**
 * Events edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Events;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Events\Edit();

        $testObject = new \RescueGroups\Objects\Event();
        $testObject->eventID = 'testValue ID';
        $testObject->eventName = 'testValue Name';
        $testObject->eventStart = 'testValue Start Date/Time';
        $testObject->eventEnd = 'testValue End Date/Time';
        $testObject->eventUrl = 'testValue Web address';
        $testObject->eventDescription = 'testValue Description';
        $testObject->eventLocationID = 'testValue Location';
        $testObject->eventSpecies = 'testValue Species attending';

        $query->updateEvent($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('events', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['eventID']);
        $this->assertEquals('testValue Name', $data['values'][0]['eventName']);
        $this->assertEquals('testValue Start Date/Time', $data['values'][0]['eventStart']);
        $this->assertEquals('testValue End Date/Time', $data['values'][0]['eventEnd']);
        $this->assertEquals('testValue Web address', $data['values'][0]['eventUrl']);
        $this->assertEquals('testValue Description', $data['values'][0]['eventDescription']);
        $this->assertEquals('testValue Location', $data['values'][0]['eventLocationID']);
        $this->assertEquals('testValue Species attending', $data['values'][0]['eventSpecies']);
    }
}