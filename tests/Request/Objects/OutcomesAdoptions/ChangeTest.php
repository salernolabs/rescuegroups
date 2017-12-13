<?php
/**
 * OutcomesAdoptions Change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesAdoptions;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\Change();

        
        $query->setOutcomeID("outcomeID");
        $query->setOutcomesAdoptionAnimalConditionID("outcomesAdoptionAnimalConditionID");
        $query->setOutcomesAdoptionDate("outcomesAdoptionDate");
        $query->setOutcomesAdoptionNotes("outcomesAdoptionNotes");
        $query->setOutcomesAdoptionAdoptionID("outcomesAdoptionAdoptionID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesAdoptions", $data["objectType"]);

        $this->assertEquals("change", $data["objectAction"]);

        $this->assertEquals("outcomeID", $data["outcomeID"]);
        $this->assertEquals("outcomesAdoptionAnimalConditionID", $data["outcomesAdoptionAnimalConditionID"]);
        $this->assertEquals("outcomesAdoptionDate", $data["outcomesAdoptionDate"]);
        $this->assertEquals("outcomesAdoptionNotes", $data["outcomesAdoptionNotes"]);
        $this->assertEquals("outcomesAdoptionAdoptionID", $data["outcomesAdoptionAdoptionID"]);
    }
}