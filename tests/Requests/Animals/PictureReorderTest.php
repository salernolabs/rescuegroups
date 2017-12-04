<?php
/**
 * Animals PictureReorder Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Animals\PictureReorder;

class PictureReorderTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Animals\PictureReorder();

        
        $query->setAnimalID("animalID");
        $query->setMediaID("mediaID");
        $query->setNewOrder("newOrder");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("pictureReorder", $data["objectAction"]);

        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("mediaID", $data["mediaID"]);
        $this->assertEquals("newOrder", $data["newOrder"]);
    }
}