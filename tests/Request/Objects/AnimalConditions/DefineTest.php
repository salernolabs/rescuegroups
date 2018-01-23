<?php
/**
 * AnimalConditions define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalConditions;

class DefineTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalConditions\Define();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalConditions', $data['objectType']);
        $this->assertEquals('define', $data['objectAction']);
    }
}