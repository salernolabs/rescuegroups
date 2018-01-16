<?php
/**
 * AnimalsJournalEntries add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsJournalEntries;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsJournalEntries\Add();

        $testObject = new \RescueGroups\Objects\AnimalsJournalEntry();
        $testObject->journalEntryDate = 'testValue Date';
        $testObject->journalEntryComment = 'testValue Comment';
        $testObject->journalEntryEntrytypeID = 'testValue Entrytype ID';
        $testObject->journalEntryCost = 'testValue Cost';
        $testObject->journalEntryDueDate = 'testValue Due Date';
        $testObject->journalEntryReminderDate = 'testValue Reminder Date';

        $query->addAnimalsJournalEntry($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsJournalEntries', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Date', $data['values'][0]['journalEntryDate']);
        $this->assertEquals('testValue Comment', $data['values'][0]['journalEntryComment']);
        $this->assertEquals('testValue Entrytype ID', $data['values'][0]['journalEntryEntrytypeID']);
        $this->assertEquals('testValue Cost', $data['values'][0]['journalEntryCost']);
        $this->assertEquals('testValue Due Date', $data['values'][0]['journalEntryDueDate']);
        $this->assertEquals('testValue Reminder Date', $data['values'][0]['journalEntryReminderDate']);
    }
}