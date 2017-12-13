<?php
/**
 * Colonies View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Colonies\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Colonies\View();

        
        $query->setColonyID("colonyID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("colonies", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("colonyID", $data["colonyID"]);
    }
}