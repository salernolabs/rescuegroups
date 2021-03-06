<?php
/**
 * Animals getEnabledSpecies Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class GetEnabledSpeciesTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\GetEnabledSpecies();

        $data = $this->api->getPostObject($query);


        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('getEnabledSpecies', $data['objectAction']);
    }
}