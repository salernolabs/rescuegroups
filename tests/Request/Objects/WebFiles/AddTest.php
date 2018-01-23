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
        $testObject->binary = 'testValue File';
        $testObject->oldFileName = 'testValue Old file name';
        $testObject->description = 'testValue Description';
        $testObject->status = 'testValue Status';
        $testObject->displayInline = 'testValue Inline';

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