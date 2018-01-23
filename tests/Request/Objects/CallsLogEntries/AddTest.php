<?php
/**
 * CallsLogEntries add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsLogEntries;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsLogEntries\Add();

        $testObject = new \RescueGroups\Objects\Create\CallsLogEntry();
        $testObject->contactId = 'testValue Contact';
        $testObject->date = 'testValue Date';
        $testObject->outcomeId = 'testValue Outcome';
        $testObject->comments = 'testValue Comments';

        $query->addCallsLogEntry($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsLogentries', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Contact', $data['values'][0]['logentryContactID']);
        $this->assertEquals('testValue Date', $data['values'][0]['logentryDate']);
        $this->assertEquals('testValue Outcome', $data['values'][0]['logentryOutcomeID']);
        $this->assertEquals('testValue Comments', $data['values'][0]['logentryComments']);
    }
}