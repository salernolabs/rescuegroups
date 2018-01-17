<?php
/**
 * ContactFiles edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ContactFiles;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ContactFiles\Edit();

        $testObject = new \RescueGroups\Objects\ContactFile();
        $testObject->contactfileID = 'testValue File ID';
        $testObject->contactfileDescription = 'testValue Description';
        $testObject->contactfileStatus = 'testValue Status';
        $testObject->contactfileDisplayInline = 'testValue Inline';

        $query->updateContactFile($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('contactFiles', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue File ID', $data['values'][0]['contactfileID']);
        $this->assertEquals('testValue Description', $data['values'][0]['contactfileDescription']);
        $this->assertEquals('testValue Status', $data['values'][0]['contactfileStatus']);
        $this->assertEquals('testValue Inline', $data['values'][0]['contactfileDisplayInline']);
    }
}