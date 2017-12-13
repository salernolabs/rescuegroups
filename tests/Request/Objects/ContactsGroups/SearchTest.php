<?php
/**
 * ContactsGroups Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ContactsGroups;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ContactsGroups\Search();

        
        $query->setGroupID("groupID");
        $query->setGroupName("groupName");
        $query->setGroupBusiness("groupBusiness");
        $query->setGroupProtected("groupProtected");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contactsGroups", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("groupID", $data["groupID"]);
        $this->assertEquals("groupName", $data["groupName"]);
        $this->assertEquals("groupBusiness", $data["groupBusiness"]);
        $this->assertEquals("groupProtected", $data["groupProtected"]);
    }
}