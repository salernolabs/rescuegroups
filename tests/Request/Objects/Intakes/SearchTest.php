<?php
/**
 * Intakes Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Intakes;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Intakes\Search();

        
        $query->setIntakeID("intakeID");
        $query->setIntakeOutcomeID("intakeOutcomeID");
        $query->setIntakeAnimalID("intakeAnimalID");
        $query->setIntakeAnimalConditionID("intakeAnimalConditionID");
        $query->setIntakeType("intakeType");
        $query->setIntakeDate("intakeDate");
        $query->setIntakeNotes("intakeNotes");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakes", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("intakeID", $data["intakeID"]);
        $this->assertEquals("intakeOutcomeID", $data["intakeOutcomeID"]);
        $this->assertEquals("intakeAnimalID", $data["intakeAnimalID"]);
        $this->assertEquals("intakeAnimalConditionID", $data["intakeAnimalConditionID"]);
        $this->assertEquals("intakeType", $data["intakeType"]);
        $this->assertEquals("intakeDate", $data["intakeDate"]);
        $this->assertEquals("intakeNotes", $data["intakeNotes"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
    }
}