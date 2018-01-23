<?php
/**
 * ContactsGroups edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ContactsGroups;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ContactsGroups\Edit();

        $testObject = new \RescueGroups\Objects\ContactsGroup();
        $testObject->id = 'testValue ID';
        $testObject->name = 'testValue Name';
        $testObject->business = 'testValue Business';

        $query->updateContactsGroup($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('contactsGroups', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['groupID']);
        $this->assertEquals('testValue Name', $data['values'][0]['groupName']);
        $this->assertEquals('testValue Business', $data['values'][0]['groupBusiness']);
    }
}