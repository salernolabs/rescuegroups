<?php
/**
 * CallsLogentries Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\CallsLogentries\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\CallsLogentries\Add();

        
        $query->setLogentryCallID("logentryCallID");
        $query->setLogentryContactID("logentryContactID");
        $query->setLogentryDate("logentryDate");
        $query->setLogentryOutcomeID("logentryOutcomeID");
        $query->setLogentryComments("logentryComments");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsLogentries", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("logentryCallID", $data["logentryCallID"]);
        $this->assertEquals("logentryContactID", $data["logentryContactID"]);
        $this->assertEquals("logentryDate", $data["logentryDate"]);
        $this->assertEquals("logentryOutcomeID", $data["logentryOutcomeID"]);
        $this->assertEquals("logentryComments", $data["logentryComments"]);
    }
}