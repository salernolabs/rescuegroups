<?php
/**
 * WebFiles add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebFiles;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebFiles\Add();

        $testObject = new \RescueGroups\Objects\Create\WebFile();
        $testObject->webfileBinary = 'testValue File';
        $testObject->webfileOldFileName = 'testValue Old file name';
        $testObject->webfileDescription = 'testValue Description';
        $testObject->webfileStatus = 'testValue Status';
        $testObject->webfileDisplayInline = 'testValue Inline';

        $query->addWebFile($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webfiles', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue File', $data['values'][0]['webfileBinary']);
        $this->assertEquals('testValue Old file name', $data['values'][0]['webfileOldFileName']);
        $this->assertEquals('testValue Description', $data['values'][0]['webfileDescription']);
        $this->assertEquals('testValue Status', $data['values'][0]['webfileStatus']);
        $this->assertEquals('testValue Inline', $data['values'][0]['webfileDisplayInline']);
    }
}