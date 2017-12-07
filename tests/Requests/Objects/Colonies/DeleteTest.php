<?php
/**
 * Colonies Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:38
 */
namespace RescueGroups\Tests\Requests\Objects\Colonies\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Colonies\Delete();

        
        $query->setColonyID("colonyID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("colonies", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("colonyID", $data["colonyID"]);
    }
}