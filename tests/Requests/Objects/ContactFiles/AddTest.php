<?php
/**
 * ContactFiles Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:20
 */
namespace RescueGroups\Tests\Requests\Objects\ContactFiles\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\ContactFiles\Add();

        
        $query->setContactfileContactID("contactfileContactID");
        $query->setContactfileBinary("contactfileBinary");
        $query->setContactfileOldFileName("contactfileOldFileName");
        $query->setContactfileDescription("contactfileDescription");
        $query->setContactfileStatus("contactfileStatus");
        $query->setContactfileDisplayInline("contactfileDisplayInline");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contactFiles", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("contactfileContactID", $data["contactfileContactID"]);
        $this->assertEquals("contactfileBinary", $data["contactfileBinary"]);
        $this->assertEquals("contactfileOldFileName", $data["contactfileOldFileName"]);
        $this->assertEquals("contactfileDescription", $data["contactfileDescription"]);
        $this->assertEquals("contactfileStatus", $data["contactfileStatus"]);
        $this->assertEquals("contactfileDisplayInline", $data["contactfileDisplayInline"]);
    }
}