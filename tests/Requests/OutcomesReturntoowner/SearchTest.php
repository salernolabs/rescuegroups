<?php
/**
 * OutcomesReturntoowner Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\OutcomesReturntoowner\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\OutcomesReturntoowner\Search();

        
        $query->setOutcomesReturntoownerID("outcomesReturntoownerID");
        $query->setOutcomesReturntoownerIntakeID("outcomesReturntoownerIntakeID");
        $query->setOutcomesReturntoownerAnimalConditionID("outcomesReturntoownerAnimalConditionID");
        $query->setOutcomesReturntoownerDate("outcomesReturntoownerDate");
        $query->setOutcomesReturntoownerNotes("outcomesReturntoownerNotes");
        $query->setOutcomesReturntoownerOwnerID("outcomesReturntoownerOwnerID");
        $query->setAnimalID("animalID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");
        $query->setReturntoownerName("returntoownerName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReturntoowner", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("outcomesReturntoownerID", $data["outcomesReturntoownerID"]);
        $this->assertEquals("outcomesReturntoownerIntakeID", $data["outcomesReturntoownerIntakeID"]);
        $this->assertEquals("outcomesReturntoownerAnimalConditionID", $data["outcomesReturntoownerAnimalConditionID"]);
        $this->assertEquals("outcomesReturntoownerDate", $data["outcomesReturntoownerDate"]);
        $this->assertEquals("outcomesReturntoownerNotes", $data["outcomesReturntoownerNotes"]);
        $this->assertEquals("outcomesReturntoownerOwnerID", $data["outcomesReturntoownerOwnerID"]);
        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
        $this->assertEquals("returntoownerName", $data["returntoownerName"]);
    }
}