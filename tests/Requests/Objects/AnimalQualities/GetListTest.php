<?php
/**
 * AnimalQualities GetList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalQualities\GetList;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalQualities\GetList();

        
        $query->setAnimalQualities("animalQualities");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalQualities", $data["objectType"]);

        $this->assertEquals("list", $data["objectAction"]);

        $this->assertEquals("animalQualities", $data["animalQualities"]);
    }
}