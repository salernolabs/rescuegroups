<?php
/**
 * WaitingLists View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WaitingLists\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WaitingLists\View();

        
        $query->setWaitinglistID("waitinglistID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("waitinglists", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("waitinglistID", $data["waitinglistID"]);
    }
}