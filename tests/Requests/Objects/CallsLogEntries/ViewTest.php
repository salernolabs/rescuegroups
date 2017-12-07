<?php
/**
 * CallsLogEntries View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:37
 */
namespace RescueGroups\Tests\Requests\Objects\CallsLogEntries\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\CallsLogEntries\View();

        
        $query->setLogentryID("logentryID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsLogentries", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("logentryID", $data["logentryID"]);
    }
}