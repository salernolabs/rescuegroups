<?php
/**
 * AnimalQualities PublicList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalQualities\PublicList;

class PublicListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalQualities\PublicList();

        
        $query->setAnimalQualities("animalQualities");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalQualities", $data["objectType"]);

        $this->assertEquals("publicList", $data["objectAction"]);

        $this->assertEquals("animalQualities", $data["animalQualities"]);
    }
}