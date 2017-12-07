<?php
/**
 * Colonies Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:20
 */
namespace RescueGroups\Tests\Requests\Objects\Colonies\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Colonies\Edit();

        
        $query->setColonyID("colonyID");
        $query->setColonyName("colonyName");
        $query->setColonyLocationID("colonyLocationID");
        $query->setColonyTotalAnimals("colonyTotalAnimals");
        $query->setColonyRegisteredDate("colonyRegisteredDate");
        $query->setColonySpecificLocation("colonySpecificLocation");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("colonies", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("colonyID", $data["colonyID"]);
        $this->assertEquals("colonyName", $data["colonyName"]);
        $this->assertEquals("colonyLocationID", $data["colonyLocationID"]);
        $this->assertEquals("colonyTotalAnimals", $data["colonyTotalAnimals"]);
        $this->assertEquals("colonyRegisteredDate", $data["colonyRegisteredDate"]);
        $this->assertEquals("colonySpecificLocation", $data["colonySpecificLocation"]);
    }
}