<?php
/**
 * WebFiles Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\WebFiles\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\WebFiles\Search();

        
        $query->setWebfileID("webfileID");
        $query->setWebfileOldName("webfileOldName");
        $query->setWebfileName("webfileName");
        $query->setWebfileDescription("webfileDescription");
        $query->setWebfileStatus("webfileStatus");
        $query->setWebfileDisplayInline("webfileDisplayInline");
        $query->setWebfileRoleID("webfileRoleID");
        $query->setWebfileRoleName("webfileRoleName");
        $query->setWebfileSize("webfileSize");
        $query->setWebfileCreatedDate("webfileCreatedDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("webfiles", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("webfileID", $data["webfileID"]);
        $this->assertEquals("webfileOldName", $data["webfileOldName"]);
        $this->assertEquals("webfileName", $data["webfileName"]);
        $this->assertEquals("webfileDescription", $data["webfileDescription"]);
        $this->assertEquals("webfileStatus", $data["webfileStatus"]);
        $this->assertEquals("webfileDisplayInline", $data["webfileDisplayInline"]);
        $this->assertEquals("webfileRoleID", $data["webfileRoleID"]);
        $this->assertEquals("webfileRoleName", $data["webfileRoleName"]);
        $this->assertEquals("webfileSize", $data["webfileSize"]);
        $this->assertEquals("webfileCreatedDate", $data["webfileCreatedDate"]);
    }
}