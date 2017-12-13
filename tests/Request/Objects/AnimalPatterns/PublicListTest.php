<?php
/**
 * AnimalPatterns PublicList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalPatterns\PublicList;

class PublicListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalPatterns\PublicList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalPatterns", $data["objectType"]);

        $this->assertEquals("publicList", $data["objectAction"]);

    }
}