<?php
/**
 * Calls View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Calls\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Calls\View();

        
        $query->setCallID("callID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("calls", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("callID", $data["callID"]);
    }
}