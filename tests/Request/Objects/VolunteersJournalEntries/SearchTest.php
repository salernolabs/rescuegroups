<?php
/**
 * VolunteersJournalEntries search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\VolunteersJournalEntries;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\VolunteersJournalEntries\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('journalEntryID')
            ->addField('journalEntryContactID')
            ->addField('journalEntryDate')
            ->addField('journalEntryComment')
            ->addField('journalEntryType')
            ->addField('volunteerName')
            ->addField('volunteerType')
            ->addField('journalEntryCreatedDate')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('volunteersJournalEntries', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "journalEntryID",
            "journalEntryContactID",
            "journalEntryDate",
            "journalEntryComment",
            "journalEntryType",
            "volunteerName",
            "volunteerType",
            "journalEntryCreatedDate",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
