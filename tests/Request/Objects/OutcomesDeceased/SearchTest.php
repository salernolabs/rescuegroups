<?php
/**
 * OutcomesDeceased Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesDeceased;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesDeceased\Search();

        
        $query->setId("id");
        $query->setIntakeID("intakeID");
        $query->setAnimalConditionID("animalConditionID");
        $query->setDate("date");
        $query->setNotes("notes");
        $query->setReason("reason");
        $query->setAnimalID("animalID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesDeceased", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("id", $data["outcomesDeceasedID"]);
        $this->assertEquals("intakeID", $data["outcomesDeceasedIntakeID"]);
        $this->assertEquals("animalConditionID", $data["outcomesDeceasedAnimalConditionID"]);
        $this->assertEquals("date", $data["outcomesDeceasedDate"]);
        $this->assertEquals("notes", $data["outcomesDeceasedNotes"]);
        $this->assertEquals("reason", $data["outcomesDeceasedReason"]);
        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
    }
}