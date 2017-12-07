<?php
/**
 * ContactsGroups Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:39
 */
namespace RescueGroups\Tests\Requests\Objects\ContactsGroups\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\ContactsGroups\Add();

        
        $query->setGroupName("groupName");
        $query->setGroupBusiness("groupBusiness");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contactsGroups", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("groupName", $data["groupName"]);
        $this->assertEquals("groupBusiness", $data["groupBusiness"]);
    }
}