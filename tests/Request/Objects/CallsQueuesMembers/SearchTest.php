<?php
/**
 * CallsQueuesMembers search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsQueuesMembers;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('memberID')
            ->addFilter('memberID', 'equals', 'ID')
            ->addField('memberContactID')
            ->addFilter('memberContactID', 'equals', 'Contact')
            ->addField('memberQueueID')
            ->addFilter('memberQueueID', 'equals', 'Queue')
            ->addField('memberManager')
            ->addFilter('memberManager', 'equals', 'Manager')
            ->addField('memberCreatedDate')
            ->addFilter('memberCreatedDate', 'equals', 'Created Date')
            ->addField('memberCreatedByID')
            ->addFilter('memberCreatedByID', 'equals', 'Created by')
            ->addField('memberUpdatedDate')
            ->addFilter('memberUpdatedDate', 'equals', 'Updated Date')
            ->addField('memberUpdatedByID')
            ->addFilter('memberUpdatedByID', 'equals', 'Updated by')
            ->addField('queueName')
            ->addFilter('queueName', 'equals', 'Call Queue')
            ->addField('memberName')
            ->addFilter('memberName', 'equals', 'Member')
            ->addField('memberContactType')
            ->addFilter('memberContactType', 'equals', 'Type')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsQueuesMembers', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'memberID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'memberContactID','operation'=>'equals','criteria'=>"Contact"],
            ['fieldName'=>'memberQueueID','operation'=>'equals','criteria'=>"Queue"],
            ['fieldName'=>'memberManager','operation'=>'equals','criteria'=>"Manager"],
            ['fieldName'=>'memberCreatedDate','operation'=>'equals','criteria'=>"Created Date"],
            ['fieldName'=>'memberCreatedByID','operation'=>'equals','criteria'=>"Created by"],
            ['fieldName'=>'memberUpdatedDate','operation'=>'equals','criteria'=>"Updated Date"],
            ['fieldName'=>'memberUpdatedByID','operation'=>'equals','criteria'=>"Updated by"],
            ['fieldName'=>'queueName','operation'=>'equals','criteria'=>"Call Queue"],
            ['fieldName'=>'memberName','operation'=>'equals','criteria'=>"Member"],
            ['fieldName'=>'memberContactType','operation'=>'equals','criteria'=>"Type"],
        ];

        $translatedFields = [
            "memberID",
            "memberContactID",
            "memberQueueID",
            "memberManager",
            "memberCreatedDate",
            "memberCreatedByID",
            "memberUpdatedDate",
            "memberUpdatedByID",
            "queueName",
            "memberName",
            "memberContactType",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
