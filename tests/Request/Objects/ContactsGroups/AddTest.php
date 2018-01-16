<?php
/**
 * ContactsGroups add Request Test
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

        $testObject = new \RescueGroups\Objects\ContactsGroup();
        $testObject->groupName = 'testValue Name';
        $testObject->groupBusiness = 'testValue Business';

        $query->addContactsGroup($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('contactsGroups', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Name', $data['values'][0]['groupName']);
        $this->assertEquals('testValue Business', $data['values'][0]['groupBusiness']);
    }
}