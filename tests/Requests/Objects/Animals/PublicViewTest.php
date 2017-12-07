<?php
/**
 * Animals PublicView Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:14
 */
namespace RescueGroups\Tests\Requests\Objects\Animals\PublicView;

class PublicViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Animals\PublicView();

        
        $query->setAnimalID("animalID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("publicView", $data["objectAction"]);

        $this->assertEquals("animalID", $data["animalID"]);
    }
}