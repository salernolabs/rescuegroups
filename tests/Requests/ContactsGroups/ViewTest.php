<?php
/**
 * ContactsGroups View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\ContactsGroups\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\ContactsGroups\View();

        
        $query->setGroupID("groupID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contactsGroups", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("groupID", $data["groupID"]);
    }
}