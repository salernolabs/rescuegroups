<?php
/**
 * WebImages add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebImages;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebImages\Add();

        $testObject = new \RescueGroups\Objects\Create\WebImage();
        $testObject->binary = 'testValue File';
        $testObject->oldFileName = 'testValue Original File Name';
        $testObject->name = 'testValue Name';

        $query->addWebImage($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webimages', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue File', $data['values'][0]['webimageBinary']);
        $this->assertEquals('testValue Original File Name', $data['values'][0]['webimageOldFileName']);
        $this->assertEquals('testValue Name', $data['values'][0]['webimageName']);
    }
}