<?php
/**
 * Waitinglists Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Waitinglists\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Waitinglists\Add();

        
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