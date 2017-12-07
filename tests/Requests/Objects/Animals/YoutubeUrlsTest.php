<?php
/**
 * Animals YoutubeUrls Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\Animals\YoutubeUrls;

class YoutubeUrlsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Animals\YoutubeUrls();

        
        $query->setAnimalID("animalID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("youtubeUrls", $data["objectAction"]);

        $this->assertEquals("animalID", $data["animalID"]);
    }
}