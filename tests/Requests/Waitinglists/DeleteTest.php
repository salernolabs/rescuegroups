<?php
/**
 * Waitinglists Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Waitinglists\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Waitinglists\Delete();

        
        $query->setWaitinglistID("waitinglistID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("waitinglists", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("waitinglistID", $data["waitinglistID"]);
    }
}