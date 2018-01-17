<?php
/**
 * Memorials edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Memorials;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Memorials\Edit();

        $testObject = new \RescueGroups\Objects\Memorial();
        $testObject->memorialID = 'testValue ID';
        $testObject->memorialPictureBinary = 'testValue File';
        $testObject->memorialPictureOldFileName = 'testValue Old file name';
        $testObject->memorialName = 'testValue File name';
        $testObject->memorialDescription = 'testValue Description';

        $query->updateMemorial($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('memorials', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['memorialID']);
        $this->assertEquals('testValue File', $data['values'][0]['memorialPictureBinary']);
        $this->assertEquals('testValue Old file name', $data['values'][0]['memorialPictureOldFileName']);
        $this->assertEquals('testValue File name', $data['values'][0]['memorialName']);
        $this->assertEquals('testValue Description', $data['values'][0]['memorialDescription']);
    }
}