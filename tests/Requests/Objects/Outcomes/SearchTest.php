<?php
/**
 * Outcomes Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\Outcomes\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Outcomes\Search();

        
        $query->setOutcomeID("outcomeID");
        $query->setOutcomeAnimalConditionID("outcomeAnimalConditionID");
        $query->setOutcomeType("outcomeType");
        $query->setOutcomeDate("outcomeDate");
        $query->setOutcomeNotes("outcomeNotes");
        $query->setIntakeID("intakeID");
        $query->setIntakeAnimalID("intakeAnimalID");
        $query->setAnimalName("animalName");
        $query->setOutcomeAnimalConditionName("outcomeAnimalConditionName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomes", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("outcomeID", $data["outcomeID"]);
        $this->assertEquals("outcomeAnimalConditionID", $data["outcomeAnimalConditionID"]);
        $this->assertEquals("outcomeType", $data["outcomeType"]);
        $this->assertEquals("outcomeDate", $data["outcomeDate"]);
        $this->assertEquals("outcomeNotes", $data["outcomeNotes"]);
        $this->assertEquals("intakeID", $data["intakeID"]);
        $this->assertEquals("intakeAnimalID", $data["intakeAnimalID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("outcomeAnimalConditionName", $data["outcomeAnimalConditionName"]);
    }
}