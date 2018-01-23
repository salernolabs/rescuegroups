<?php
/**
 * WebFiles edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebFiles;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebFiles\Edit();

        $testObject = new \RescueGroups\Objects\WebFile();
        $testObject->webfileID = 'testValue ID';
        $testObject->webfileDescription = 'testValue Description';
        $testObject->tatus = 'testValue Status';
        $testObject->webfileDisplayInline = 'testValue Inline';
        $testObject->webfileRoleID = 'testValue Security Role';

        $query->updateWebFile($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webfiles', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['webfileID']);
        $this->assertEquals('testValue Description', $data['values'][0]['webfileDescription']);
        $this->assertEquals('testValue Status', $data['values'][0]['webfileStatus']);
        $this->assertEquals('testValue Inline', $data['values'][0]['webfileDisplayInline']);
        $this->assertEquals('testValue Security Role', $data['values'][0]['webfileRoleID']);
    }
}