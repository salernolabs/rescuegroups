<?php
/**
 * ContactFiles Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\ContactFiles\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\ContactFiles\Search();

        
        $query->setContactfileID("contactfileID");
        $query->setContactfileContactID("contactfileContactID");
        $query->setContactfileOldName("contactfileOldName");
        $query->setContactfileDescription("contactfileDescription");
        $query->setContactfileStatus("contactfileStatus");
        $query->setContactfileDisplayInline("contactfileDisplayInline");
        $query->setContactfileSize("contactfileSize");
        $query->setContactfileCreatedDate("contactfileCreatedDate");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contactFiles", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("contactfileID", $data["contactfileID"]);
        $this->assertEquals("contactfileContactID", $data["contactfileContactID"]);
        $this->assertEquals("contactfileOldName", $data["contactfileOldName"]);
        $this->assertEquals("contactfileDescription", $data["contactfileDescription"]);
        $this->assertEquals("contactfileStatus", $data["contactfileStatus"]);
        $this->assertEquals("contactfileDisplayInline", $data["contactfileDisplayInline"]);
        $this->assertEquals("contactfileSize", $data["contactfileSize"]);
        $this->assertEquals("contactfileCreatedDate", $data["contactfileCreatedDate"]);
    }
}