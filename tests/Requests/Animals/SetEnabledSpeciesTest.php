<?php
/**
 * Animals SetEnabledSpecies Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Animals\SetEnabledSpecies;

class SetEnabledSpeciesTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Animals\SetEnabledSpecies();

        
        $query->setFieldlist("fieldlist");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("setEnabledSpecies", $data["objectAction"]);

        $this->assertEquals("fieldlist", $data["fieldlist"]);
    }
}