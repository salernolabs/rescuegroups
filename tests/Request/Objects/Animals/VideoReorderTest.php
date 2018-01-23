<?php
/**
 * Animals videoReorder Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class VideoReorderTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\VideoReorder();
        $query->setId("ID");
        $query->setMediaId("ID");
        $query->setNewOrder("Order");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("ID", $data['values'][0]["animalID"]);
        $this->assertEquals("ID", $data['values'][0]["mediaID"]);
        $this->assertEquals("Order", $data['values'][0]["newOrder"]);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('videoReorder', $data['objectAction']);
    }
}