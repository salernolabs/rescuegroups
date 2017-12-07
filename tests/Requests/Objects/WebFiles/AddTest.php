<?php
/**
 * WebFiles Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\WebFiles\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\WebFiles\Add();

        
        $query->setWebfileBinary("webfileBinary");
        $query->setWebfileOldFileName("webfileOldFileName");
        $query->setWebfileDescription("webfileDescription");
        $query->setWebfileStatus("webfileStatus");
        $query->setWebfileDisplayInline("webfileDisplayInline");
        $query->setWebfileRoleID("webfileRoleID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("webfiles", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("webfileBinary", $data["webfileBinary"]);
        $this->assertEquals("webfileOldFileName", $data["webfileOldFileName"]);
        $this->assertEquals("webfileDescription", $data["webfileDescription"]);
        $this->assertEquals("webfileStatus", $data["webfileStatus"]);
        $this->assertEquals("webfileDisplayInline", $data["webfileDisplayInline"]);
        $this->assertEquals("webfileRoleID", $data["webfileRoleID"]);
    }
}