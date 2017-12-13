<?php
/**
 * Animals AddYoutubeUrl Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class AddYoutubeUrlTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\AddYoutubeUrl();

        
        $query->setAnimalID("animalID");
        $query->setYoutubeUrl("youtubeUrl");
        $query->setMediaOrder("mediaOrder");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("addYoutubeUrl", $data["objectAction"]);

        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("youtubeUrl", $data["youtubeUrl"]);
        $this->assertEquals("mediaOrder", $data["mediaOrder"]);
    }
}