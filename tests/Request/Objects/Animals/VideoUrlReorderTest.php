<?php
/**
 * Animals VideoUrlReorder Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals\VideoUrlReorder;

class VideoUrlReorderTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\VideoUrlReorder();

        
        $query->setAnimalID("animalID");
        $query->setMediaID("mediaID");
        $query->setNewOrder("newOrder");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("videoUrlReorder", $data["objectAction"]);

        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("mediaID", $data["mediaID"]);
        $this->assertEquals("newOrder", $data["newOrder"]);
    }
}