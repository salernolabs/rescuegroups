<?php
/**
 * AnimalColors publicList Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalColors;

class PublicListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalColors\PublicList();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalColors', $data['objectType']);
        $this->assertEquals('publicList', $data['objectAction']);
    }
}