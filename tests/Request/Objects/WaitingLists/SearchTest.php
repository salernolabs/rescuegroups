<?php
/**
 * WaitingLists search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WaitingLists;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WaitingLists\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('name')
            ->addFilter('name', 'equals', 'Name')
            ->addField('type')
            ->addFilter('type', 'equals', 'Type')
            ->addField('comment')
            ->addFilter('comment', 'equals', 'Comment')
            ->addField('membersCount')
            ->addFilter('membersCount', 'equals', 'Members Count')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('waitinglists', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'waitinglistID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'waitinglistName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'waitinglistType','operation'=>'equals','criteria'=>"Type"],
            ['fieldName'=>'waitinglistComment','operation'=>'equals','criteria'=>"Comment"],
            ['fieldName'=>'waitinglistMembersCount','operation'=>'equals','criteria'=>"Members Count"],
        ];

        $translatedFields = [
            "waitinglistID",
            "waitinglistName",
            "waitinglistType",
            "waitinglistComment",
            "waitinglistMembersCount",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
