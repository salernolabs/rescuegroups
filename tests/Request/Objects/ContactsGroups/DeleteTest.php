<?php
/**
 * ContactsGroups Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ContactsGroups\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ContactsGroups\Delete();

        
        $query->setGroupID("groupID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contactsGroups", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("groupID", $data["groupID"]);
    }
}