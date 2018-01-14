<?php
/**
 * AnimalsJournalEntryTypes search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsJournalEntryTypes;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsJournalEntryTypes\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('journalEntrytypeID')
            ->addFilter('journalEntrytypeID', 'equals', 'Entrytype ID')
            ->addField('journalEntrytypeDescription')
            ->addFilter('journalEntrytypeDescription', 'equals', 'Description')
            ->addField('journalEntrytypeCategoryID')
            ->addFilter('journalEntrytypeCategoryID', 'equals', 'Category ID')
            ->addField('journalEntrytypeCategoryName')
            ->addFilter('journalEntrytypeCategoryName', 'equals', 'Category')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsJournalEntrytypes', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'journalEntrytypeID','operation'=>'equals','criteria'=>"Entrytype ID"],
            ['fieldName'=>'journalEntrytypeDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'journalEntrytypeCategoryID','operation'=>'equals','criteria'=>"Category ID"],
            ['fieldName'=>'journalEntrytypeCategoryName','operation'=>'equals','criteria'=>"Category"],
        ];

        $translatedFields = [
            "journalEntrytypeID",
            "journalEntrytypeDescription",
            "journalEntrytypeCategoryID",
            "journalEntrytypeCategoryName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
