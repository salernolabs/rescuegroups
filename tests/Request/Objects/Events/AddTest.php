<?php
/**
 * Events add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Events;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Events\Add();

        $testObject = new \RescueGroups\Objects\Event();
        $testObject->eventName = 'testValue Name';
        $testObject->tart = 'testValue Start Date/Time';
        $testObject->eventEnd = 'testValue End Date/Time';
        $testObject->eventUrl = 'testValue Web address';
        $testObject->eventDescription = 'testValue Description';
        $testObject->pecies = 'testValue Species attending';

        $query->addEvent($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('events', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Name', $data['values'][0]['eventName']);
        $this->assertEquals('testValue Start Date/Time', $data['values'][0]['eventStart']);
        $this->assertEquals('testValue End Date/Time', $data['values'][0]['eventEnd']);
        $this->assertEquals('testValue Web address', $data['values'][0]['eventUrl']);
        $this->assertEquals('testValue Description', $data['values'][0]['eventDescription']);
        $this->assertEquals('testValue Species attending', $data['values'][0]['eventSpecies']);
    }
}