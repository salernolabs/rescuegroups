<?php
/**
 * Memorials add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Memorials;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Memorials\Add();

        $testObject = new \RescueGroups\Objects\Memorial();
        $testObject->memorialPictureBinary = 'testValue File';
        $testObject->memorialName = 'testValue File name';
        $testObject->memorialPictureOldFileName = 'testValue Old file name';
        $testObject->memorialDescription = 'testValue Description';
        $testObject->memorialOrder = 'testValue Order';

        $query->addMemorial($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('memorials', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue File', $data['values'][0]['memorialPictureBinary']);
        $this->assertEquals('testValue File name', $data['values'][0]['memorialName']);
        $this->assertEquals('testValue Old file name', $data['values'][0]['memorialPictureOldFileName']);
        $this->assertEquals('testValue Description', $data['values'][0]['memorialDescription']);
        $this->assertEquals('testValue Order', $data['values'][0]['memorialOrder']);
    }
}