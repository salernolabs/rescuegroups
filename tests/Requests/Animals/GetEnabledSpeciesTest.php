<?php
/**
 * Animals GetEnabledSpecies Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Animals\GetEnabledSpecies;

class GetEnabledSpeciesTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Animals\GetEnabledSpecies();

        

        $data = $this->api->getPostObject($query);

        
    }
}