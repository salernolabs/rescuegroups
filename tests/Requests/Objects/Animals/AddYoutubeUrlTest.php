<?php
/**
 * Animals AddYoutubeUrl Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:14
 */
namespace RescueGroups\Tests\Requests\Objects\Animals\AddYoutubeUrl;

class AddYoutubeUrlTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Animals\AddYoutubeUrl();

        
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