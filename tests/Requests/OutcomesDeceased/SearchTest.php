<?php
/**
 * OutcomesDeceased Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\OutcomesDeceased\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\OutcomesDeceased\Search();

        
        $query->setOutcomesDeceasedID("outcomesDeceasedID");
        $query->setOutcomesDeceasedIntakeID("outcomesDeceasedIntakeID");
        $query->setOutcomesDeceasedAnimalConditionID("outcomesDeceasedAnimalConditionID");
        $query->setOutcomesDeceasedDate("outcomesDeceasedDate");
        $query->setOutcomesDeceasedNotes("outcomesDeceasedNotes");
        $query->setOutcomesDeceasedReason("outcomesDeceasedReason");
        $query->setAnimalID("animalID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesDeceased", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("outcomesDeceasedID", $data["outcomesDeceasedID"]);
        $this->assertEquals("outcomesDeceasedIntakeID", $data["outcomesDeceasedIntakeID"]);
        $this->assertEquals("outcomesDeceasedAnimalConditionID", $data["outcomesDeceasedAnimalConditionID"]);
        $this->assertEquals("outcomesDeceasedDate", $data["outcomesDeceasedDate"]);
        $this->assertEquals("outcomesDeceasedNotes", $data["outcomesDeceasedNotes"]);
        $this->assertEquals("outcomesDeceasedReason", $data["outcomesDeceasedReason"]);
        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
    }
}