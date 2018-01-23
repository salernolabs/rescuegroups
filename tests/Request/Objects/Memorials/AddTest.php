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

        $testObject = new \RescueGroups\Objects\Create\Memorial();
        $testObject->pictureBinary = 'testValue File';
        $testObject->name = 'testValue File name';
        $testObject->pictureOldFileName = 'testValue Old file name';
        $testObject->description = 'testValue Description';
        $testObject->order = 'testValue Order';

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