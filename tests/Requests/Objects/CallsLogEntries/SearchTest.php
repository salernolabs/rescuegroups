<?php
/**
 * CallsLogEntries Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:19
 */
namespace RescueGroups\Tests\Requests\Objects\CallsLogEntries\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\CallsLogEntries\Search();

        
        $query->setLogentryID("logentryID");
        $query->setLogentryCallID("logentryCallID");
        $query->setLogentryContactID("logentryContactID");
        $query->setLogentryDate("logentryDate");
        $query->setLogentryOutcomeID("logentryOutcomeID");
        $query->setLogentryComments("logentryComments");
        $query->setContactName("contactName");
        $query->setOutcomeName("outcomeName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsLogentries", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("logentryID", $data["logentryID"]);
        $this->assertEquals("logentryCallID", $data["logentryCallID"]);
        $this->assertEquals("logentryContactID", $data["logentryContactID"]);
        $this->assertEquals("logentryDate", $data["logentryDate"]);
        $this->assertEquals("logentryOutcomeID", $data["logentryOutcomeID"]);
        $this->assertEquals("logentryComments", $data["logentryComments"]);
        $this->assertEquals("contactName", $data["contactName"]);
        $this->assertEquals("outcomeName", $data["outcomeName"]);
    }
}