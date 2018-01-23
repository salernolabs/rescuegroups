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
            ->addFilter('callID', 'equals', 'ID')
            ->addField('callContactID')
            ->addFilter('callContactID', 'equals', 'Contact')
            ->addField('callAssignedID')
            ->addFilter('callAssignedID', 'equals', 'Assigned')
            ->addField('tatusID')
            ->addFilter('tatusID', 'equals', 'Status')
            ->addField('callUrgencyID')
            ->addFilter('callUrgencyID', 'equals', 'Urgency')
            ->addField('callCategoryID')
            ->addFilter('callCategoryID', 'equals', 'Category')
            ->addField('callQueueID')
            ->addFilter('callQueueID', 'equals', 'Queue')
            ->addField('callDate')
            ->addFilter('callDate', 'equals', 'Call date')
            ->addField('contactName')
            ->addFilter('contactName', 'equals', 'Contact')
            ->addField('contactType')
            ->addFilter('contactType', 'equals', 'Contact Type')
            ->addField('assignedName')
            ->addFilter('assignedName', 'equals', 'Assigned To')
            ->addField('queueName')
            ->addFilter('queueName', 'equals', 'Queue')
            ->addField('categoryName')
            ->addFilter('categoryName', 'equals', 'Category')
            ->addField('statusName')
            ->addFilter('statusName', 'equals', 'Status')
            ->addField('urgencyName')
            ->addFilter('urgencyName', 'equals', 'Urgency')
            ->addField('lastOutcome')
            ->addFilter('lastOutcome', 'equals', 'Last Outcome')
            ->addField('logEntryCount')
            ->addFilter('logEntryCount', 'equals', 'Log Entries Count')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('calls', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'callID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'callContactID','operation'=>'equals','criteria'=>"Contact"],
            ['fieldName'=>'callAssignedID','operation'=>'equals','criteria'=>"Assigned"],
            ['fieldName'=>'callStatusID','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'callUrgencyID','operation'=>'equals','criteria'=>"Urgency"],
            ['fieldName'=>'callCategoryID','operation'=>'equals','criteria'=>"Category"],
            ['fieldName'=>'callQueueID','operation'=>'equals','criteria'=>"Queue"],
            ['fieldName'=>'callDate','operation'=>'equals','criteria'=>"Call date"],
            ['fieldName'=>'contactName','operation'=>'equals','criteria'=>"Contact"],
            ['fieldName'=>'contactType','operation'=>'equals','criteria'=>"Contact Type"],
            ['fieldName'=>'assignedName','operation'=>'equals','criteria'=>"Assigned To"],
            ['fieldName'=>'queueName','operation'=>'equals','criteria'=>"Queue"],
            ['fieldName'=>'categoryName','operation'=>'equals','criteria'=>"Category"],
            ['fieldName'=>'statusName','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'urgencyName','operation'=>'equals','criteria'=>"Urgency"],
            ['fieldName'=>'lastOutcome','operation'=>'equals','criteria'=>"Last Outcome"],
            ['fieldName'=>'logEntryCount','operation'=>'equals','criteria'=>"Log Entries Count"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
