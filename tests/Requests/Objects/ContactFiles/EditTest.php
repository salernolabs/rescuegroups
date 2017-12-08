<?php
/**
 * ContactFiles Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\ContactFiles\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\ContactFiles\Edit();

        
        $query->setContactfileID("contactfileID");
        $query->setContactfileDescription("contactfileDescription");
        $query->setContactfileStatus("contactfileStatus");
        $query->setContactfileDisplayInline("contactfileDisplayInline");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contactFiles", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("contactfileID", $data["contactfileID"]);
        $this->assertEquals("contactfileDescription", $data["contactfileDescription"]);
        $this->assertEquals("contactfileStatus", $data["contactfileStatus"]);
        $this->assertEquals("contactfileDisplayInline", $data["contactfileDisplayInline"]);
    }
}