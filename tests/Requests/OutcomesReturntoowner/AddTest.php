<?php
/**
 * OutcomesReturntoowner Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\OutcomesReturntoowner\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\OutcomesReturntoowner\Add();

        
        $query->setOutcomesReturntoownerIntakeID("outcomesReturntoownerIntakeID");
        $query->setOutcomesReturntoownerAnimalConditionID("outcomesReturntoownerAnimalConditionID");
        $query->setOutcomesReturntoownerDate("outcomesReturntoownerDate");
        $query->setOutcomesReturntoownerNotes("outcomesReturntoownerNotes");
        $query->setOutcomesReturntoownerOwnerID("outcomesReturntoownerOwnerID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReturntoowner", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("outcomesReturntoownerIntakeID", $data["outcomesReturntoownerIntakeID"]);
        $this->assertEquals("outcomesReturntoownerAnimalConditionID", $data["outcomesReturntoownerAnimalConditionID"]);
        $this->assertEquals("outcomesReturntoownerDate", $data["outcomesReturntoownerDate"]);
        $this->assertEquals("outcomesReturntoownerNotes", $data["outcomesReturntoownerNotes"]);
        $this->assertEquals("outcomesReturntoownerOwnerID", $data["outcomesReturntoownerOwnerID"]);
    }
}