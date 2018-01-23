<?php
/**
 * Animals setEnabledSpecies Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class SetEnabledSpeciesTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\SetEnabledSpecies();
        $query->setFieldlist("Field list");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Field list", $data['values'][0]["fieldlist"]);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('setEnabledSpecies', $data['objectAction']);
    }
}