<?php
/**
 * AnimalBreeds publicList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalBreeds;

class PublicListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalBreeds\PublicList();

        $data = $this->api->getPostObject($query);


        $this->assertEquals('animalBreeds', $data['objectType']);
        $this->assertEquals('publicList', $data['objectAction']);
    }
}