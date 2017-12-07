<?php
/**
 * ContactsGroups Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:39
 */
namespace RescueGroups\Tests\Requests\Objects\ContactsGroups\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\ContactsGroups\Search();

        
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