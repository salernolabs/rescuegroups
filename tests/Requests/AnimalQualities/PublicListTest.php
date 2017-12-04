<?php
/**
 * AnimalQualities PublicList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\AnimalQualities\PublicList;

class PublicListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\AnimalQualities\PublicList();

        
        $query->setAnimalQualities("animalQualities");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalQualities", $data["objectType"]);

        $this->assertEquals("publicList", $data["objectAction"]);

        $this->assertEquals("animalQualities", $data["animalQualities"]);
    }
}