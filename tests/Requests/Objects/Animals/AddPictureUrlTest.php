<?php
/**
 * Animals AddPictureUrl Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\Animals\AddPictureUrl;

class AddPictureUrlTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Animals\AddPictureUrl();

        
        $query->setAnimalID("animalID");
        $query->setPictureUrl("pictureUrl");
        $query->setMediaOrder("mediaOrder");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("addPictureUrl", $data["objectAction"]);

        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("pictureUrl", $data["pictureUrl"]);
        $this->assertEquals("mediaOrder", $data["mediaOrder"]);
    }
}