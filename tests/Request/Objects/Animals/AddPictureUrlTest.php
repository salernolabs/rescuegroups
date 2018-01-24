<?php
/**
 * Animals addPictureUrl Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class AddPictureUrlTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\AddPictureUrl();
        $query->setId("ID");
        $query->setPictureUrl("Picture Url");
        $query->setMediaOrder("Order");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("ID", $data['values'][0]["animalID"]);
        $this->assertEquals("Picture Url", $data['values'][0]["pictureUrl"]);
        $this->assertEquals("Order", $data['values'][0]["mediaOrder"]);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('addPictureUrl', $data['objectAction']);
    }
}