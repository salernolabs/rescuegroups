<?php
/**
 * AnimalsJournalEntryTypes add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsJournalEntryTypes;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsJournalEntryTypes\Add();

        $testObject = new \RescueGroups\Objects\AnimalsJournalEntryType();
        $testObject->description = 'testValue Description';

        $query->addAnimalsJournalEntryType($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsJournalEntrytypes', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Description', $data['values'][0]['journalEntrytypeDescription']);
    }
}