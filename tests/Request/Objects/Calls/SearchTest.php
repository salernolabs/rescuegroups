<?php
/**
 * Calls search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Calls;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Calls\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('callID')
            ->addField('callContactID')
            ->addField('callAssignedID')
            ->addField('callStatusID')
            ->addField('callUrgencyID')
            ->addField('callCategoryID')
            ->addField('callQueueID')
            ->addField('callDate')
            ->addField('contactName')
            ->addField('contactType')
            ->addField('assignedName')
            ->addField('queueName')
            ->addField('categoryName')
            ->addField('statusName')
            ->addField('urgencyName')
            ->addField('lastOutcome')
            ->addField('logEntryCount')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('calls', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "callID",
            "callContactID",
            "callAssignedID",
            "callStatusID",
            "callUrgencyID",
            "callCategoryID",
            "callQueueID",
            "callDate",
            "contactName",
            "contactType",
            "assignedName",
            "queueName",
            "categoryName",
            "statusName",
            "urgencyName",
            "lastOutcome",
            "logEntryCount",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
