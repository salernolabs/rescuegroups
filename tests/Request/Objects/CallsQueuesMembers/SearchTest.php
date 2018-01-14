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
            ->addField('memberContactID')
            ->addField('memberQueueID')
            ->addField('memberManager')
            ->addField('memberCreatedDate')
            ->addField('memberCreatedByID')
            ->addField('memberUpdatedDate')
            ->addField('memberUpdatedByID')
            ->addField('queueName')
            ->addField('memberName')
            ->addField('memberContactType')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsQueuesMembers', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
