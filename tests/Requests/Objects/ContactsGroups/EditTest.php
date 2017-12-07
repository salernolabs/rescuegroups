<?php
/**
 * ContactsGroups Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:21
 */
namespace RescueGroups\Tests\Requests\Objects\ContactsGroups\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\ContactsGroups\Edit();

        
        $query->setGroupID("groupID");
        $query->setGroupName("groupName");
        $query->setGroupBusiness("groupBusiness");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contactsGroups", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("groupID", $data["groupID"]);
        $this->assertEquals("groupName", $data["groupName"]);
        $this->assertEquals("groupBusiness", $data["groupBusiness"]);
    }
}