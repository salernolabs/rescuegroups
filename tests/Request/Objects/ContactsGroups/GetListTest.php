<?php
/**
 * ContactsGroups list Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ContactsGroups;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ContactsGroups\GetList();
        $query->setContact("Group");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Group", $data['values'][0]["contactGroup"]);

        $this->assertEquals('contactsGroups', $data['objectType']);
        $this->assertEquals('list', $data['objectAction']);
    }
}