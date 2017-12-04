<?php
/**
 * Animals VideoReorder Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Animals\VideoReorder;

class VideoReorderTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Animals\VideoReorder();

        
        $query->setAnimalID("animalID");
        $query->setMediaID("mediaID");
        $query->setNewOrder("newOrder");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("videoReorder", $data["objectAction"]);

        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("mediaID", $data["mediaID"]);
        $this->assertEquals("newOrder", $data["newOrder"]);
    }
}