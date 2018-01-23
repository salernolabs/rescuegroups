<?php
/**
 * ContactFiles add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ContactFiles;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ContactFiles\Add();

        $testObject = new \RescueGroups\Objects\Create\ContactFile();
        $testObject->binary = 'testValue File';
        $testObject->oldFileName = 'testValue Old file name';
        $testObject->description = 'testValue Description';
        $testObject->status = 'testValue Status';
        $testObject->displayInline = 'testValue Inline';

        $query->addContactFile($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('contactFiles', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue File', $data['values'][0]['contactfileBinary']);
        $this->assertEquals('testValue Old file name', $data['values'][0]['contactfileOldFileName']);
        $this->assertEquals('testValue Description', $data['values'][0]['contactfileDescription']);
        $this->assertEquals('testValue Status', $data['values'][0]['contactfileStatus']);
        $this->assertEquals('testValue Inline', $data['values'][0]['contactfileDisplayInline']);
    }
}