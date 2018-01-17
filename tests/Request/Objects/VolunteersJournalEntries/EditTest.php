<?php
/**
 * VolunteersJournalEntries edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\VolunteersJournalEntries;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\VolunteersJournalEntries\Edit();

        $testObject = new \RescueGroups\Objects\VolunteersJournalEntry();
        $testObject->journalEntryID = 'testValue ID';
        $testObject->journalEntryContactID = 'testValue Contact';
        $testObject->journalEntryDate = 'testValue Date';
        $testObject->journalEntryComment = 'testValue Comment';
        $testObject->journalEntryType = 'testValue Entry Type';

        $query->updateVolunteersJournalEntry($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('volunteersJournalEntries', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['journalEntryID']);
        $this->assertEquals('testValue Contact', $data['values'][0]['journalEntryContactID']);
        $this->assertEquals('testValue Date', $data['values'][0]['journalEntryDate']);
        $this->assertEquals('testValue Comment', $data['values'][0]['journalEntryComment']);
        $this->assertEquals('testValue Entry Type', $data['values'][0]['journalEntryType']);
    }
}