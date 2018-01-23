<?php
/**
 * WaitingLists add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WaitingLists;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WaitingLists\Add();

        $testObject = new \RescueGroups\Objects\WaitingList();
        $testObject->name = 'testValue Name';
        $testObject->type = 'testValue Type';
        $testObject->comment = 'testValue Comment';

        $query->addWaitingList($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('waitinglists', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Name', $data['values'][0]['waitinglistName']);
        $this->assertEquals('testValue Type', $data['values'][0]['waitinglistType']);
        $this->assertEquals('testValue Comment', $data['values'][0]['waitinglistComment']);
    }
}