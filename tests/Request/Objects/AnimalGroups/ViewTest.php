<?php
/**
 * AnimalGroups View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalGroups;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalGroups\View();

        
        $query->setGroupID("groupID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalGroups", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("groupID", $data["groupID"]);
    }
}