<?php
/**
 * VolunteersJournalEntries add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\VolunteersJournalEntries;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\VolunteersJournalEntries\Add();

        $testObject = new \RescueGroups\Objects\VolunteersJournalEntry();
        $testObject->journalEntryDate = 'testValue Date';
        $testObject->journalEntryComment = 'testValue Comment';
        $testObject->journalEntryType = 'testValue Entry Type';

        $query->addVolunteersJournalEntry($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('volunteersJournalEntries', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Date', $data['values'][0]['journalEntryDate']);
        $this->assertEquals('testValue Comment', $data['values'][0]['journalEntryComment']);
        $this->assertEquals('testValue Entry Type', $data['values'][0]['journalEntryType']);
    }
}