<?php
/**
 * Animals addPicture Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class AddPictureTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\AddPicture();
        $query->setId("ID");
        $query->setPictureBinary("Picture");
        $query->setFileName("File name");
        $query->setMediaOrder("Order");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("ID", $data['values'][0]["animalID"]);
        $this->assertEquals("Picture", $data['values'][0]["pictureBinary"]);
        $this->assertEquals("File name", $data['values'][0]["fileName"]);
        $this->assertEquals("Order", $data['values'][0]["mediaOrder"]);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('addPicture', $data['objectAction']);
    }
}