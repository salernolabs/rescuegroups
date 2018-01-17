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
            ->addField('queueID')
            ->addFilter('queueID', 'equals', 'ID')
            ->addField('queueName')
            ->addFilter('queueName', 'equals', 'Name')
            ->addField('queueFromEmail')
            ->addFilter('queueFromEmail', 'equals', 'From Email Address')
            ->addField('queueDefaultUrgencyID')
            ->addFilter('queueDefaultUrgencyID', 'equals', 'Default Urgency')
            ->addField('queueDefaultUrgencyName')
            ->addFilter('queueDefaultUrgencyName', 'equals', 'Default Urgency')
            ->addField('queueCreatedDate')
            ->addFilter('queueCreatedDate', 'equals', 'Created Date')
            ->addField('queueCreatedByID')
            ->addFilter('queueCreatedByID', 'equals', 'Created by')
            ->addField('queueUpdatedDate')
            ->addFilter('queueUpdatedDate', 'equals', 'Updated Date')
            ->addField('queueUpdatedByID')
            ->addFilter('queueUpdatedByID', 'equals', 'Updated by')
            ->addField('queueOpenCallsCount')
            ->addFilter('queueOpenCallsCount', 'equals', 'Open Calls')
            ->addField('queueMembersCount')
            ->addFilter('queueMembersCount', 'equals', 'Members')
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
