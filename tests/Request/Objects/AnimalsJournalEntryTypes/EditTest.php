<?php
/**
 * AnimalsJournalEntryTypes edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsJournalEntryTypes;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsJournalEntryTypes\Edit();

        $testObject = new \RescueGroups\Objects\AnimalsJournalEntryType();
        $testObject->id = 'testValue Entrytype ID';
        $testObject->description = 'testValue Description';
        $testObject->categoryId = 'testValue Category ID';

        $query->updateAnimalsJournalEntryType($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsJournalEntrytypes', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Entrytype ID', $data['values'][0]['journalEntrytypeID']);
        $this->assertEquals('testValue Description', $data['values'][0]['journalEntrytypeDescription']);
        $this->assertEquals('testValue Category ID', $data['values'][0]['journalEntrytypeCategoryID']);
    }
}