<?php
/**
 * Animals AddVideo Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Animals\AddVideo;

class AddVideoTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Animals\AddVideo();

        
        $query->setAnimalID("animalID");
        $query->setVideoBinary("videoBinary");
        $query->setFileName("fileName");
        $query->setMediaOrder("mediaOrder");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("addVideo", $data["objectAction"]);

        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("videoBinary", $data["videoBinary"]);
        $this->assertEquals("fileName", $data["fileName"]);
        $this->assertEquals("mediaOrder", $data["mediaOrder"]);
    }
}