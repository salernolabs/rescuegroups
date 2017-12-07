<?php
/**
 * Colonies Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:38
 */
namespace RescueGroups\Tests\Requests\Objects\Colonies\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Colonies\Add();

        
        $query->setColonyName("colonyName");
        $query->setColonyLocationID("colonyLocationID");
        $query->setColonyTotalAnimals("colonyTotalAnimals");
        $query->setColonyRegisteredDate("colonyRegisteredDate");
        $query->setColonySpecificLocation("colonySpecificLocation");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("colonies", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("colonyName", $data["colonyName"]);
        $this->assertEquals("colonyLocationID", $data["colonyLocationID"]);
        $this->assertEquals("colonyTotalAnimals", $data["colonyTotalAnimals"]);
        $this->assertEquals("colonyRegisteredDate", $data["colonyRegisteredDate"]);
        $this->assertEquals("colonySpecificLocation", $data["colonySpecificLocation"]);
    }
}