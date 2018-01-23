<?php
/**
 * AnimalFiles view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalFiles;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalFiles\View();
        $query->setId("File ID");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("File ID", $data['values'][0]["animalfileID"]);

        $this->assertEquals('animalFiles', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}