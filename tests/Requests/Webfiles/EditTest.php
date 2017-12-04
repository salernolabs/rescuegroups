<?php
/**
 * Webfiles Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Webfiles\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Webfiles\Edit();

        
        $query->setWebfileID("webfileID");
        $query->setWebfileDescription("webfileDescription");
        $query->setWebfileStatus("webfileStatus");
        $query->setWebfileDisplayInline("webfileDisplayInline");
        $query->setWebfileRoleID("webfileRoleID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("webfiles", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("webfileID", $data["webfileID"]);
        $this->assertEquals("webfileDescription", $data["webfileDescription"]);
        $this->assertEquals("webfileStatus", $data["webfileStatus"]);
        $this->assertEquals("webfileDisplayInline", $data["webfileDisplayInline"]);
        $this->assertEquals("webfileRoleID", $data["webfileRoleID"]);
    }
}