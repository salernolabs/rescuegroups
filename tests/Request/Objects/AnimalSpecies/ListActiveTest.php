<?php
/**
 * AnimalSpecies listActive Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalSpecies;

class ListActiveTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalSpecies\ListActive();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalSpecies', $data['objectType']);
        $this->assertEquals('listActive', $data['objectAction']);
    }
}