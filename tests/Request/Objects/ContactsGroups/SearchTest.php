<?php
/**
 * ContactsGroups search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ContactsGroups;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ContactsGroups\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('groupID')
            ->addFilter('groupID', 'equals', 'ID')
            ->addField('groupName')
            ->addFilter('groupName', 'equals', 'Name')
            ->addField('groupBusiness')
            ->addFilter('groupBusiness', 'equals', 'Business')
            ->addField('groupProtected')
            ->addFilter('groupProtected', 'equals', 'Protected')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('contactsGroups', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'groupID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'groupName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'groupBusiness','operation'=>'equals','criteria'=>"Business"],
            ['fieldName'=>'groupProtected','operation'=>'equals','criteria'=>"Protected"],
        ];

        $translatedFields = [
            "groupID",
            "groupName",
            "groupBusiness",
            "groupProtected",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
