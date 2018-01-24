<?php
/**
 * AnimalQualities list Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalQualities;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalQualities\GetList();
        $query->setAnimalQualities("Animal Qualities");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Animal Qualities", $data['values'][0]["animalQualities"]);

        $this->assertEquals('animalQualities', $data['objectType']);
        $this->assertEquals('list', $data['objectAction']);
    }
}