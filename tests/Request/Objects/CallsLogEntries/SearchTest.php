<?php
/**
 * CallsLogEntries search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsLogEntries;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsLogEntries\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('logentryID')
            ->addField('logentryCallID')
            ->addField('logentryContactID')
            ->addField('logentryDate')
            ->addField('logentryOutcomeID')
            ->addField('logentryComments')
            ->addField('contactName')
            ->addField('outcomeName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsLogentries', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "logentryID",
            "logentryCallID",
            "logentryContactID",
            "logentryDate",
            "logentryOutcomeID",
            "logentryComments",
            "contactName",
            "outcomeName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
