<?php
/**
 * OutcomesReturnToOwner Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesReturnToOwner;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesReturnToOwner\Search();

        
        $query->setId("id");
        $query->setIntakeID("intakeID");
        $query->setAnimalConditionID("animalConditionID");
        $query->setDate("date");
        $query->setNotes("notes");
        $query->setOwnerID("ownerID");
        $query->setAnimalID("animalID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");
        $query->setReturntoownerName("returntoownerName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReturntoowner", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("id", $data["outcomesReturntoownerID"]);
        $this->assertEquals("intakeID", $data["outcomesReturntoownerIntakeID"]);
        $this->assertEquals("animalConditionID", $data["outcomesReturntoownerAnimalConditionID"]);
        $this->assertEquals("date", $data["outcomesReturntoownerDate"]);
        $this->assertEquals("notes", $data["outcomesReturntoownerNotes"]);
        $this->assertEquals("ownerID", $data["outcomesReturntoownerOwnerID"]);
        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
        $this->assertEquals("returntoownerName", $data["returntoownerName"]);
    }
}