<?php
/**
 * WaitingLists Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:27
 */
namespace RescueGroups\Tests\Requests\Objects\WaitingLists\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\WaitingLists\Edit();

        
        $query->setWaitinglistID("waitinglistID");
        $query->setWaitinglistName("waitinglistName");
        $query->setWaitinglistType("waitinglistType");
        $query->setWaitinglistComment("waitinglistComment");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("waitinglists", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("waitinglistID", $data["waitinglistID"]);
        $this->assertEquals("waitinglistName", $data["waitinglistName"]);
        $this->assertEquals("waitinglistType", $data["waitinglistType"]);
        $this->assertEquals("waitinglistComment", $data["waitinglistComment"]);
    }
}