<?php
/**
 * WebImages edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebImages;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebImages\Edit();

        $testObject = new \RescueGroups\Objects\WebImage();
        $testObject->id = 'testValue ID';
        $testObject->name = 'testValue Name';

        $query->updateWebImage($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webimages', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['webimageID']);
        $this->assertEquals('testValue Name', $data['values'][0]['webimageName']);
    }
}