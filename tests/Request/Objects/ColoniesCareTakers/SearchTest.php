<?php
/**
 * ColoniesCareTakers search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ColoniesCareTakers;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ColoniesCareTakers\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('caretakerID')
            ->addFilter('caretakerID', 'equals', 'ID')
            ->addField('caretakerColonyID')
            ->addFilter('caretakerColonyID', 'equals', 'Colony')
            ->addField('caretakerContactID')
            ->addFilter('caretakerContactID', 'equals', 'Contact')
            ->addField('caretakerContactName')
            ->addFilter('caretakerContactName', 'equals', 'Contact')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('coloniesCaretakers', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'caretakerID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'caretakerColonyID','operation'=>'equals','criteria'=>"Colony"],
            ['fieldName'=>'caretakerContactID','operation'=>'equals','criteria'=>"Contact"],
            ['fieldName'=>'caretakerContactName','operation'=>'equals','criteria'=>"Contact"],
        ];

        $translatedFields = [
            "caretakerID",
            "caretakerColonyID",
            "caretakerContactID",
            "caretakerContactName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
