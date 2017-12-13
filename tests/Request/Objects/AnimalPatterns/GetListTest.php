<?php
/**
 * AnimalPatterns GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalPatterns\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalPatterns\GetList();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalPatterns", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

    }
}