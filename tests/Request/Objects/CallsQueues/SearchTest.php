<?php
/**
 * CallsQueues search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsQueues;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsQueues\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('name')
            ->addFilter('name', 'equals', 'Name')
            ->addField('fromEmail')
            ->addFilter('fromEmail', 'equals', 'From Email Address')
            ->addField('defaultUrgencyId')
            ->addFilter('defaultUrgencyId', 'equals', 'Default Urgency')
            ->addField('defaultUrgencyName')
            ->addFilter('defaultUrgencyName', 'equals', 'Default Urgency')
            ->addField('createdDate')
            ->addFilter('createdDate', 'equals', 'Created Date')
            ->addField('createdById')
            ->addFilter('createdById', 'equals', 'Created by')
            ->addField('updatedDate')
            ->addFilter('updatedDate', 'equals', 'Updated Date')
            ->addField('updatedById')
            ->addFilter('updatedById', 'equals', 'Updated by')
            ->addField('openCallsCount')
            ->addFilter('openCallsCount', 'equals', 'Open Calls')
            ->addField('membersCount')
            ->addFilter('membersCount', 'equals', 'Members')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsQueues', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'queueID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'queueName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'queueFromEmail','operation'=>'equals','criteria'=>"From Email Address"],
            ['fieldName'=>'queueDefaultUrgencyID','operation'=>'equals','criteria'=>"Default Urgency"],
            ['fieldName'=>'queueDefaultUrgencyName','operation'=>'equals','criteria'=>"Default Urgency"],
            ['fieldName'=>'queueCreatedDate','operation'=>'equals','criteria'=>"Created Date"],
            ['fieldName'=>'queueCreatedByID','operation'=>'equals','criteria'=>"Created by"],
            ['fieldName'=>'queueUpdatedDate','operation'=>'equals','criteria'=>"Updated Date"],
            ['fieldName'=>'queueUpdatedByID','operation'=>'equals','criteria'=>"Updated by"],
            ['fieldName'=>'queueOpenCallsCount','operation'=>'equals','criteria'=>"Open Calls"],
            ['fieldName'=>'queueMembersCount','operation'=>'equals','criteria'=>"Members"],
        ];

        $translatedFields = [
            "queueID",
            "queueName",
            "queueFromEmail",
            "queueDefaultUrgencyID",
            "queueDefaultUrgencyName",
            "queueCreatedDate",
            "queueCreatedByID",
            "queueUpdatedDate",
            "queueUpdatedByID",
            "queueOpenCallsCount",
            "queueMembersCount",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
