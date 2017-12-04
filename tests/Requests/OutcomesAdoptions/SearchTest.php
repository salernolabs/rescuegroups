<?php
/**
 * OutcomesAdoptions Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\OutcomesAdoptions\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\OutcomesAdoptions\Search();

        
        $query->setOutcomesAdoptionID("outcomesAdoptionID");
        $query->setOutcomesAdoptionIntakeID("outcomesAdoptionIntakeID");
        $query->setOutcomesAdoptionAnimalConditionID("outcomesAdoptionAnimalConditionID");
        $query->setOutcomesAdoptionDate("outcomesAdoptionDate");
        $query->setOutcomesAdoptionNotes("outcomesAdoptionNotes");
        $query->setOutcomesAdoptionAdoptionID("outcomesAdoptionAdoptionID");
        $query->setAnimalID("animalID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");
        $query->setAdopterContactID("adopterContactID");
        $query->setOwnerName("ownerName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesAdoptions", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("outcomesAdoptionID", $data["outcomesAdoptionID"]);
        $this->assertEquals("outcomesAdoptionIntakeID", $data["outcomesAdoptionIntakeID"]);
        $this->assertEquals("outcomesAdoptionAnimalConditionID", $data["outcomesAdoptionAnimalConditionID"]);
        $this->assertEquals("outcomesAdoptionDate", $data["outcomesAdoptionDate"]);
        $this->assertEquals("outcomesAdoptionNotes", $data["outcomesAdoptionNotes"]);
        $this->assertEquals("outcomesAdoptionAdoptionID", $data["outcomesAdoptionAdoptionID"]);
        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
        $this->assertEquals("adopterContactID", $data["adopterContactID"]);
        $this->assertEquals("ownerName", $data["ownerName"]);
    }
}