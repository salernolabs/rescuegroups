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
            ->addField('queueName')
            ->addField('queueFromEmail')
            ->addField('queueDefaultUrgencyID')
            ->addField('queueDefaultUrgencyName')
            ->addField('queueCreatedDate')
            ->addField('queueCreatedByID')
            ->addField('queueUpdatedDate')
            ->addField('queueUpdatedByID')
            ->addField('queueOpenCallsCount')
            ->addField('queueMembersCount')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsQueues', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
