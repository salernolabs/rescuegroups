<?php
/**
 * AnimalFiles View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalFiles\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalFiles\View();

        
        $query->setAnimalfileID("animalfileID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalFiles", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("animalfileID", $data["animalfileID"]);
    }
}