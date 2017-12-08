<?php
/**
 * IntakesTransfers Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesTransfers\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesTransfers\Search();

        
        $query->setIntakesTransferID("intakesTransferID");
        $query->setIntakesTransferAnimalID("intakesTransferAnimalID");
        $query->setIntakesTransferAnimalConditionID("intakesTransferAnimalConditionID");
        $query->setIntakesTransferDate("intakesTransferDate");
        $query->setIntakesTransferNotes("intakesTransferNotes");
        $query->setIntakesTransferFromID("intakesTransferFromID");
        $query->setIntakesTransferCoalitionMember("intakesTransferCoalitionMember");
        $query->setIntakesTransferReasonID("intakesTransferReasonID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");
        $query->setTransferFromName("transferFromName");
        $query->setTransferReason("transferReason");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesTransfers", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("intakesTransferID", $data["intakesTransferID"]);
        $this->assertEquals("intakesTransferAnimalID", $data["intakesTransferAnimalID"]);
        $this->assertEquals("intakesTransferAnimalConditionID", $data["intakesTransferAnimalConditionID"]);
        $this->assertEquals("intakesTransferDate", $data["intakesTransferDate"]);
        $this->assertEquals("intakesTransferNotes", $data["intakesTransferNotes"]);
        $this->assertEquals("intakesTransferFromID", $data["intakesTransferFromID"]);
        $this->assertEquals("intakesTransferCoalitionMember", $data["intakesTransferCoalitionMember"]);
        $this->assertEquals("intakesTransferReasonID", $data["intakesTransferReasonID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
        $this->assertEquals("transferFromName", $data["transferFromName"]);
        $this->assertEquals("transferReason", $data["transferReason"]);
    }
}