<?php
/**
 * OutcomesReturntoowner Change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\OutcomesReturntoowner\Change;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\OutcomesReturntoowner\Change();

        
        $query->setOutcomeID("outcomeID");
        $query->setOutcomesReturntoownerAnimalConditionID("outcomesReturntoownerAnimalConditionID");
        $query->setOutcomesReturntoownerDate("outcomesReturntoownerDate");
        $query->setOutcomesReturntoownerNotes("outcomesReturntoownerNotes");
        $query->setOutcomesReturntoownerOwnerID("outcomesReturntoownerOwnerID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReturntoowner", $data["objectType"]);

        $this->assertEquals("change", $data["objectAction"]);

        $this->assertEquals("outcomeID", $data["outcomeID"]);
        $this->assertEquals("outcomesReturntoownerAnimalConditionID", $data["outcomesReturntoownerAnimalConditionID"]);
        $this->assertEquals("outcomesReturntoownerDate", $data["outcomesReturntoownerDate"]);
        $this->assertEquals("outcomesReturntoownerNotes", $data["outcomesReturntoownerNotes"]);
        $this->assertEquals("outcomesReturntoownerOwnerID", $data["outcomesReturntoownerOwnerID"]);
    }
}