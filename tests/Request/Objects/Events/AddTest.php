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
        $testObject->name = 'testValue Name';
        $testObject->start = 'testValue Start Date/Time';
        $testObject->end = 'testValue End Date/Time';
        $testObject->url = 'testValue Web address';
        $testObject->description = 'testValue Description';
        $testObject->species = 'testValue Species attending';

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