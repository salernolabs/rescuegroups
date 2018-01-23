<?php
/**
 * AnimalsJournalEntries edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsJournalEntries;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsJournalEntries\Edit();

        $testObject = new \RescueGroups\Objects\AnimalsJournalEntry();
        $testObject->id = 'testValue Entry ID';
        $testObject->animalId = 'testValue Animal ID';
        $testObject->date = 'testValue Date';
        $testObject->comment = 'testValue Comment';
        $testObject->entrytypeId = 'testValue Entrytype ID';
        $testObject->cost = 'testValue Cost';
        $testObject->dueDate = 'testValue Due Date';
        $testObject->reminderDate = 'testValue Reminder Date';

        $query->updateAnimalsJournalEntry($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsJournalEntries', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Entry ID', $data['values'][0]['journalEntryID']);
        $this->assertEquals('testValue Animal ID', $data['values'][0]['journalEntryAnimalID']);
        $this->assertEquals('testValue Date', $data['values'][0]['journalEntryDate']);
        $this->assertEquals('testValue Comment', $data['values'][0]['journalEntryComment']);
        $this->assertEquals('testValue Entrytype ID', $data['values'][0]['journalEntryEntrytypeID']);
        $this->assertEquals('testValue Cost', $data['values'][0]['journalEntryCost']);
        $this->assertEquals('testValue Due Date', $data['values'][0]['journalEntryDueDate']);
        $this->assertEquals('testValue Reminder Date', $data['values'][0]['journalEntryReminderDate']);
    }
}