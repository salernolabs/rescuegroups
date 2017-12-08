<?php
/**
 * OutcomesReturnToOwner Change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesReturnToOwner\Change;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesReturnToOwner\Change();

        
        $query->setOutcomeID("outcomeID");
        $query->setAnimalConditionID("animalConditionID");
        $query->setDate("date");
        $query->setNotes("notes");
        $query->setOwnerID("ownerID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReturntoowner", $data["objectType"]);

        $this->assertEquals("change", $data["objectAction"]);

        $this->assertEquals("outcomeID", $data["outcomeID"]);
        $this->assertEquals("animalConditionID", $data["outcomesReturntoownerAnimalConditionID"]);
        $this->assertEquals("date", $data["outcomesReturntoownerDate"]);
        $this->assertEquals("notes", $data["outcomesReturntoownerNotes"]);
        $this->assertEquals("ownerID", $data["outcomesReturntoownerOwnerID"]);
    }
}