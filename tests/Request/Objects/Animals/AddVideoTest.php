<?php
/**
 * Animals addVideo Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class AddVideoTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\AddVideo();
        $query->setId("ID");
        $query->setVideoBinary("Video");
        $query->setFileName("File name");
        $query->setMediaOrder("Order");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("ID", $data['values'][0]["animalID"]);
        $this->assertEquals("Video", $data['values'][0]["videoBinary"]);
        $this->assertEquals("File name", $data['values'][0]["fileName"]);
        $this->assertEquals("Order", $data['values'][0]["mediaOrder"]);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('addVideo', $data['objectAction']);
    }
}