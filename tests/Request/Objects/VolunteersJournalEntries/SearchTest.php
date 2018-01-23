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
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('contactId')
            ->addFilter('contactId', 'equals', 'Contact')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('comment')
            ->addFilter('comment', 'equals', 'Comment')
            ->addField('type')
            ->addFilter('type', 'equals', 'Entry Type')
            ->addField('volunteerName')
            ->addFilter('volunteerName', 'equals', 'Volunteer Name')
            ->addField('volunteerType')
            ->addFilter('volunteerType', 'equals', 'Volunteer Type')
            ->addField('createdDate')
            ->addFilter('createdDate', 'equals', 'Added Date')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('volunteersJournalEntries', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'journalEntryID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'journalEntryContactID','operation'=>'equals','criteria'=>"Contact"],
            ['fieldName'=>'journalEntryDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'journalEntryComment','operation'=>'equals','criteria'=>"Comment"],
            ['fieldName'=>'journalEntryType','operation'=>'equals','criteria'=>"Entry Type"],
            ['fieldName'=>'volunteerName','operation'=>'equals','criteria'=>"Volunteer Name"],
            ['fieldName'=>'volunteerType','operation'=>'equals','criteria'=>"Volunteer Type"],
            ['fieldName'=>'journalEntryCreatedDate','operation'=>'equals','criteria'=>"Added Date"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
