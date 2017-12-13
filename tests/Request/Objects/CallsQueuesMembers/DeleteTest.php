<?php
/**
 * CallsQueuesMembers Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsQueuesMembers\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Delete();

        
        $query->setMemberID("memberID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("callsQueuesMembers", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("memberID", $data["memberID"]);
    }
}