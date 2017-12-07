<?php
/**
 * Animals View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:32
 */
namespace RescueGroups\Tests\Requests\Objects\Animals\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Animals\View();

        
        $query->setAnimalID("animalID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("animalID", $data["animalID"]);
    }
}