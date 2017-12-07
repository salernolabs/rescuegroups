<?php
/**
 * WaitingLists Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:46
 */
namespace RescueGroups\Tests\Requests\Objects\WaitingLists\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\WaitingLists\Add();

        
        $query->setWaitinglistName("waitinglistName");
        $query->setWaitinglistType("waitinglistType");
        $query->setWaitinglistComment("waitinglistComment");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("waitinglists", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("waitinglistName", $data["waitinglistName"]);
        $this->assertEquals("waitinglistType", $data["waitinglistType"]);
        $this->assertEquals("waitinglistComment", $data["waitinglistComment"]);
    }
}