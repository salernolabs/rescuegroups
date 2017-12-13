<?php
/**
 * ContactsGroups Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ContactsGroups;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ContactsGroups\Add();

        
        $query->setGroupName("groupName");
        $query->setGroupBusiness("groupBusiness");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contactsGroups", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("groupName", $data["groupName"]);
        $this->assertEquals("groupBusiness", $data["groupBusiness"]);
    }
}