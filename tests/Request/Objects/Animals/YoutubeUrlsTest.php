<?php
/**
 * Animals youtubeUrls Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class YoutubeUrlsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\YoutubeUrls();
        $query->setId("ID");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("ID", $data['values'][0]["animalID"]);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('youtubeUrls', $data['objectAction']);
    }
}