<?php
/**
 * OutcomesTransfers Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:26
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesTransfers\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesTransfers\Search();

        
        $query->setOutcomesTransferID("outcomesTransferID");
        $query->setOutcomesTransferIntakeID("outcomesTransferIntakeID");
        $query->setOutcomesTransferAnimalConditionID("outcomesTransferAnimalConditionID");
        $query->setOutcomesTransferDate("outcomesTransferDate");
        $query->setOutcomesTransferNotes("outcomesTransferNotes");
        $query->setOutcomesTransferReceiveID("outcomesTransferReceiveID");
        $query->setOutcomesTransferCoalitionMember("outcomesTransferCoalitionMember");
        $query->setOutcomesTransferReasonID("outcomesTransferReasonID");
        $query->setOutcomesTransferReason("outcomesTransferReason");
        $query->setAnimalID("animalID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");
        $query->setReceiveName("receiveName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesTransfers", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("outcomesTransferID", $data["outcomesTransferID"]);
        $this->assertEquals("outcomesTransferIntakeID", $data["outcomesTransferIntakeID"]);
        $this->assertEquals("outcomesTransferAnimalConditionID", $data["outcomesTransferAnimalConditionID"]);
        $this->assertEquals("outcomesTransferDate", $data["outcomesTransferDate"]);
        $this->assertEquals("outcomesTransferNotes", $data["outcomesTransferNotes"]);
        $this->assertEquals("outcomesTransferReceiveID", $data["outcomesTransferReceiveID"]);
        $this->assertEquals("outcomesTransferCoalitionMember", $data["outcomesTransferCoalitionMember"]);
        $this->assertEquals("outcomesTransferReasonID", $data["outcomesTransferReasonID"]);
        $this->assertEquals("outcomesTransferReason", $data["outcomesTransferReason"]);
        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
        $this->assertEquals("receiveName", $data["receiveName"]);
    }
}