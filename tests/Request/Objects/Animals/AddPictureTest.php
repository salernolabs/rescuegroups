<?php
/**
 * Animals AddPicture Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals\AddPicture;

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

        
        $query->setAnimalID("animalID");
        $query->setPictureBinary("pictureBinary");
        $query->setFileName("fileName");
        $query->setMediaOrder("mediaOrder");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("addPicture", $data["objectAction"]);

        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("pictureBinary", $data["pictureBinary"]);
        $this->assertEquals("fileName", $data["fileName"]);
        $this->assertEquals("mediaOrder", $data["mediaOrder"]);
    }
}