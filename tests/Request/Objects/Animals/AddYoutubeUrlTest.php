<?php
/**
 * Animals addYoutubeUrl Request Test
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
        $query->setId("ID");
        $query->setYoutubeUrl("YouTube Url");
        $query->setMediaOrder("Order");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("ID", $data['values'][0]["animalID"]);
        $this->assertEquals("YouTube Url", $data['values'][0]["youtubeUrl"]);
        $this->assertEquals("Order", $data['values'][0]["mediaOrder"]);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('addYoutubeUrl', $data['objectAction']);
    }
}