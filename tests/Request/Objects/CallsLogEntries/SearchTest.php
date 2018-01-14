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
            ->addFilter('logentryID', 'equals', 'ID')
            ->addField('logentryCallID')
            ->addFilter('logentryCallID', 'equals', 'Call')
            ->addField('logentryContactID')
            ->addFilter('logentryContactID', 'equals', 'Contact')
            ->addField('logentryDate')
            ->addFilter('logentryDate', 'equals', 'Date')
            ->addField('logentryOutcomeID')
            ->addFilter('logentryOutcomeID', 'equals', 'Outcome')
            ->addField('logentryComments')
            ->addFilter('logentryComments', 'equals', 'Comments')
            ->addField('contactName')
            ->addFilter('contactName', 'equals', 'Contact')
            ->addField('outcomeName')
            ->addFilter('outcomeName', 'equals', 'Outcome')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsLogentries', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'logentryID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'logentryCallID','operation'=>'equals','criteria'=>"Call"],
            ['fieldName'=>'logentryContactID','operation'=>'equals','criteria'=>"Contact"],
            ['fieldName'=>'logentryDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'logentryOutcomeID','operation'=>'equals','criteria'=>"Outcome"],
            ['fieldName'=>'logentryComments','operation'=>'equals','criteria'=>"Comments"],
            ['fieldName'=>'contactName','operation'=>'equals','criteria'=>"Contact"],
            ['fieldName'=>'outcomeName','operation'=>'equals','criteria'=>"Outcome"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
